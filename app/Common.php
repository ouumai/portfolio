<?php

/**
 * The goal of this file is to allow developers a location
 * where they can overwrite core procedural functions and
 * replace them with their own. This file is loaded during
 * the bootstrap process and is called during the framework's
 * execution.
 *
 * This can be looked at as a `master helper` file that is
 * loaded early on, and may also contain additional functions
 * that you'd like to use throughout your entire application
 *
 * @see: https://codeigniter.com/user_guide/extending/common.html
 */

if (! class_exists('Locale')) {
    /**
     * Minimal Locale polyfill for environments where the intl extension
     * is unavailable in the web server SAPI.
     */
    class Locale
    {
        private static string $default = 'en';

        public static function setDefault(string $locale): bool
        {
            self::$default = self::normalize($locale);

            return true;
        }

        public static function getDefault(): string
        {
            return self::$default;
        }

        public static function canonicalize(string $locale): string
        {
            return self::normalize($locale);
        }

        private static function normalize(string $locale): string
        {
            $locale = trim($locale);

            if ($locale === '') {
                return 'en';
            }

            return str_replace('_', '-', strtolower($locale));
        }
    }
}
