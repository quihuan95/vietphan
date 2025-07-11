<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class LanguageController extends Controller
{
    /**
     * Switch language
     */
    public function switchLanguage(Request $request, string $locale): RedirectResponse
    {
        // Validate locale
        $availableLocales = ['en', 'vi'];
        if (!in_array($locale, $availableLocales)) {
            $locale = 'en';
        }

        // Set locale in session
        session(['locale' => $locale]);

        // Redirect back to previous page
        return redirect()->back();
    }

    /**
     * Get current language
     */
    public function getCurrentLanguage(): string
    {
        return session('locale', 'en');
    }

    /**
     * Get available languages
     */
    public function getAvailableLanguages(): array
    {
        return [
            'en' => __('English'),
            'vi' => __('Vietnamese'),
        ];
    }
}
