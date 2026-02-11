<?php

namespace App\Observers;

use App\Services\GeminiChatService;
use Illuminate\Support\Facades\Cache;

class PortfolioObserver
{
    /**
     * Handle the model "saved" event.
     * This will clear the chatbot context cache when any portfolio data is updated
     */
    public function saved($model): void
    {
        $this->clearChatbotCache();
    }

    /**
     * Handle the model "deleted" event.
     */
    public function deleted($model): void
    {
        $this->clearChatbotCache();
    }

    /**
     * Clear the chatbot context cache
     */
    private function clearChatbotCache(): void
    {
        Cache::forget('portfolio_context');
    }
}
