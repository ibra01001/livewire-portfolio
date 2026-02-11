# Chatbot Installation Guide

## Files to Add

1. **app/Livewire/Chatbot.php** - The Livewire component
2. **resources/views/livewire/chatbot.blade.php** - The chat UI

## Installation Steps

### 1. Add Gemini API Configuration

Add this to your `config/services.php` file:

```php
'gemini' => [
    'api_key' => env('GEMINI_API_KEY'),
],
```

### 2. Add API Key to .env

Add your Gemini API key to your `.env` file:

```
GEMINI_API_KEY=your_gemini_api_key_here
```

Get your API key from: https://makersuite.google.com/app/apikey

### 3. Include Chatbot in Your Layout

Add this line to your main layout file (likely `resources/views/layouts/app.blade.php` or `resources/views/components/layouts/app.blade.php`), just before the closing `</body>` tag:

```blade
@livewire('chatbot')
```

### 4. Ensure Alpine.js is Available

The chatbot uses Alpine.js for transitions. If you're not already using it, add this to your layout's `<head>`:

```html
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
```

## Usage

Once installed, a blue chat button will appear in the bottom-right corner of your application. Click it to open the chat window.

## Features

- ✅ Clean, minimal implementation (just 2 files!)
- ✅ Floating chat button
- ✅ Slide-in chat window
- ✅ Message history
- ✅ Clear chat option
- ✅ Responsive design
- ✅ Loading indicators
- ✅ Error handling

## Customization

### Change Position
Modify the `fixed bottom-6 right-6` classes in the blade file.

### Change Colors
Replace `bg-blue-600` with your preferred Tailwind color.

### Add Context
Modify the `sendMessage()` method in `Chatbot.php` to include system context about your portfolio.

### Example: Add Portfolio Context

```php
public function sendMessage()
{
    // ... existing code ...
    
    $response = Http::withHeaders([
        'Content-Type' => 'application/json',
    ])->post('https://generativelanguage.googleapis.com/v1beta/models/gemini-pro:generateContent?key=' . config('services.gemini.api_key'), [
        'contents' => [
            [
                'parts' => [
                    ['text' => "You are a helpful assistant for a portfolio website. Answer questions about projects, skills, and experience. User question: " . $userMessage]
                ]
            ]
        ]
    ]);
    
    // ... rest of code ...
}
```

## Troubleshooting

**Chat button not showing?**
- Make sure you added `@livewire('chatbot')` to your layout
- Check browser console for JavaScript errors
- Verify Alpine.js is loaded

**API errors?**
- Verify your GEMINI_API_KEY in .env
- Check API key validity at Google AI Studio
- Ensure your server can make outbound HTTPS requests

**Styling issues?**
- Make sure Tailwind CSS is properly compiled
- Run `npm run build` to rebuild assets