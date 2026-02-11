<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Certification;
use App\Models\Language;

class GeminiChatService
{
    private string $apiKey;
    private string $apiUrl;

    public function __construct()
    {
        $this->apiKey = config('services.gemini.api_key');
        $this->apiUrl = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent';
    }

    /**
     * Get portfolio context from database
     */
    private function getPortfolioContext(): string
    {
        // Cache the context for 1 hour to avoid repeated database queries
        return Cache::remember('portfolio_context', 3600, function () {
            $profile = Profile::first();
            $skills = Skill::where('is_active', true)->orderBy('order')->get();
            $projects = Project::where('is_active', true)->orderBy('order')->get();
            $experiences = Experience::where('is_active', true)->orderBy('order')->get();
            $education = Education::where('is_active', true)->orderBy('order')->get();
            $certifications = Certification::where('is_active', true)->orderBy('order')->get();
            $languages = Language::where('is_active', true)->orderBy('order')->get();

            $context = "You are Ibrahim Remili (virtual AI version), a Full Stack Developer. ";
            $context .= "You speak in first person as Ibrahim. Be friendly, professional, and enthusiastic about technology.\n\n";

            // Profile information
            if ($profile) {
                $context .= "ABOUT ME:\n";
                $context .= $profile->bio ?? "i like technology and i like to build things with it and mix imagination with it";
                $context .= 'my favorite language is php and laravel as a framework want to learn nativephp so i can build mobile apps ';
                $context .= "\n\n";
            }

            // Skills`
            if ($skills->isNotEmpty()) {
                $context .= "MY SKILLS:\n";
                foreach ($skills as $skill) {
                    $level = $skill->show_level && $skill->level ? " ({$skill->level}%)" : "";
                    $category = $skill->category ? " [{$skill->category}]" : "";
                    $context .= "- {$skill->name}{$level}{$category}\n";
                }
                $context .= "\n";
            }

            // Projects
            if ($projects->isNotEmpty()) {
                $context .= "MY PROJECTS:\n";
                foreach ($projects->take(10) as $project) {
                    $context .= "- {$project->title}";
                    if ($project->description) {
                        $context .= ": " . substr($project->description, 0, 150);
                    }
                    if ($project->technologies) {
                        $context .= " | Tech: {$project->technologies}";
                    }
                    if ($project->url) {
                        $context .= " | URL: {$project->url}";
                    }
                    $context .= "\n";
                }
                $context .= "\n";
            }

            // Experience
            if ($experiences->isNotEmpty()) {
                $context .= "MY WORK EXPERIENCE:\n";
                foreach ($experiences as $exp) {
                    $context .= "- {$exp->title} at {$exp->company}";
                    if ($exp->start_date) {
                        $context .= " ({$exp->start_date}";
                        $context .= $exp->end_date ? " - {$exp->end_date}" : " - Present";
                        $context .= ")";
                    }
                    if ($exp->description) {
                        $context .= ": " . substr($exp->description, 0, 150);
                    }
                    $context .= "\n";
                }
                $context .= "\n";
            }

            // Education
            if ($education->isNotEmpty()) {
                $context .= "MY EDUCATION:\n";
                foreach ($education as $edu) {
                    $context .= "- {$edu->degree}";
                    if ($edu->institution) {
                        $context .= " at {$edu->institution}";
                    }
                    if ($edu->start_date) {
                        $context .= " ({$edu->start_date}";
                        $context .= $edu->end_date ? " - {$edu->end_date}" : " - Present";
                        $context .= ")";
                    }
                    $context .= "\n";
                }
                $context .= "\n";
            }

            // Certifications
            if ($certifications->isNotEmpty()) {
                $context .= "MY CERTIFICATIONS:\n";
                foreach ($certifications as $cert) {
                    $context .= "- {$cert->name}";
                    if ($cert->issuer) {
                        $context .= " by {$cert->issuer}";
                    }
                    if ($cert->date) {
                        $context .= " ({$cert->date})";
                    }
                    $context .= "\n";
                }
                $context .= "\n";
            }

            // Languages
            if ($languages->isNotEmpty()) {
                $context .= "LANGUAGES I SPEAK:\n";
                foreach ($languages as $lang) {
                    $context .= "- {$lang->name}";
                    if ($lang->level) {
                        $context .= " ({$lang->level})";
                    }
                    $context .= "\n";
                }
                $context .= "\n";
            }

            $context .= "\nINSTRUCTIONS:\n";
            $context .= "- Always respond in first person as Ibrahim Remili\n";
            $context .= "- Be enthusiastic and passionate about technology\n";
            $context .= "- When asked about skills, projects, or experience, reference the specific details above\n";
            $context .= "- Keep responses concise but informative (2-4 sentences)\n";
            $context .= "- If asked about something not in your knowledge, be honest and direct them to contact me\n";
            $context .= "- Use emojis occasionally to be friendly 😊\n";
            $context .= "- If someone asks to hire or contact me, encourage them to use the contact form on the website or phone me 0556264762 or email me mohmamadremili500@gmail.com \n";

            return $context;
        });
    }

    /**
     * Send a message to Gemini and get a reply
     */
    public function reply(string $message): string
    {
        try {
            $response = Http::timeout(30)
                ->post($this->apiUrl . '?key=' . $this->apiKey, [
                    'contents' => [
                        [
                            'role' => 'user',
                            'parts' => [
                                ['text' => $message]
                            ]
                        ]
                    ],
                    'generationConfig' => [
                        'temperature' => 0.7,
                        'maxOutputTokens' => 1024,
                    ]
                ]);

            if ($response->successful()) {
                return $response->json()['candidates'][0]['content']['parts'][0]['text']
                    ?? 'Sorry, I could not generate a response.';
            }

            // Log error for debugging
            Log::error('Gemini API Error', [
                'status' => $response->status(),
                'body' => $response->body()
            ]);

            return match ($response->status()) {
                429 => 'I\'m receiving too many requests right now. Please wait a moment and try again.',
                401, 403 => 'API authentication error. Please check the API key configuration.',
                404 => 'AI model not found. Please check the model configuration.',
                default => 'Sorry, there was an error processing your request. Please try again.',
            };

        } catch (\Exception $e) {
            Log::error('Gemini Service Exception', [
                'message' => $e->getMessage()
            ]);

            return 'Sorry, I encountered an error. Please try again later.';
        }
    }

    /**
     * Send a message with Ibrahim's portfolio context
     */
    public function replyAsIbrahim(string $message): string
    {
        $portfolioContext = $this->getPortfolioContext();

        $fullMessage = $portfolioContext . "\n\n" .
            "VISITOR'S QUESTION: " . $message . "\n\n" .
            "YOUR RESPONSE (as Ibrahim Remili):";

        return $this->reply($fullMessage);
    }

    /**
     * Clear the cached portfolio context (call this when updating profile data)
     */
    public function clearContextCache(): void
    {
        Cache::forget('portfolio_context');
    }
}