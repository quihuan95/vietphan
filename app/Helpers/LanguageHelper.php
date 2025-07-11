<?php

namespace App\Helpers;

class LanguageHelper
{
  /**
   * Get current locale
   */
  public static function getCurrentLocale(): string
  {
    return session('locale', 'en');
  }

  /**
   * Get available locales
   */
  public static function getAvailableLocales(): array
  {
    return ['en', 'vi'];
  }

  /**
   * Get locale name
   */
  public static function getLocaleName(string $locale): string
  {
    $names = [
      'en' => 'English',
      'vi' => 'Tiếng Việt',
    ];

    return $names[$locale] ?? $locale;
  }

  /**
   * Get current locale name
   */
  public static function getCurrentLocaleName(): string
  {
    return self::getLocaleName(self::getCurrentLocale());
  }

  /**
   * Check if locale is current
   */
  public static function isCurrentLocale(string $locale): bool
  {
    return self::getCurrentLocale() === $locale;
  }

  /**
   * Get other locale
   */
  public static function getOtherLocale(): string
  {
    $current = self::getCurrentLocale();
    return $current === 'en' ? 'vi' : 'en';
  }

  /**
   * Get other locale name
   */
  public static function getOtherLocaleName(): string
  {
    return self::getLocaleName(self::getOtherLocale());
  }
}
