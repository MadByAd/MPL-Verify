<?php

/**
 *
 * This file is a part of the MadByAd\MPLVerify
 *
 * @author    MadByAd <adityaaw84@gmail.com>
 * @license   MIT License
 * @copyright Copyright (c) MadByAd 2024
 *
 */

namespace MadByAd\MPLVerify;

/**
 *
 * The VerifyString trait contains method for verifying string
 *
 * @author MadByAd <adityaaw84@gmail.com>
 *
 */

trait VerifyString
{

    /**
     * Check whether the given string is has the valid length
     *
     * @param string $string  The string to check
     * @param int    $maximum The maximum length
     * @param int    $minimum The minimum length
     *
     * @return bool `TRUE` if the given string has the valid length otherwise `FALSE`
     */

    public static function length(string $string, int $maximum = 0, int $minimum = 0)
    {
        $length = strlen($string);
        return ($string >= $minimum && $string <= $maximum);
    }

    /**
     * Check whether the given string has whitespace
     *
     * @param string $string The string to check
     *
     * @return bool `TRUE` if contain whitespace otherwise `FALSE`
     */

    public static function hasWhitespace(string $string)
    {
        return preg_match("/[\s]/", $string) == 1;
    }

    /**
     * Check whether the given string is alphabetical.
     * only contains alphabetical character which is A-Z
     *
     * @param string $string          The string to check
     * @param bool   $allowWhitespace If `TRUE` then whitespace is allowed
     *
     * @return bool `TRUE` if valid otherwise `FALSE`
     */

    public static function isAlphabetical(string $string, bool $allowWhitespace = false)
    {
        if($allowWhitespace) {
            return empty(preg_replace("/[a-ZA-Z\s]/", "", $string));
        }
        return empty(preg_replace("/[a-ZA-Z]/", "", $string));
    }

    /**
     * Check whether the given string is alphanumeric.
     * only contains alphanumeric character which is A-Z and 0-9
     *
     * @param string $string          The string to check
     * @param bool   $allowWhitespace If `TRUE` then whitespace is allowed
     *
     * @return bool `TRUE` if valid otherwise `FALSE`
     */

    public static function isAlphanumeric(string $string, bool $allowWhitespace = false)
    {
        if($allowWhitespace) {
            return empty(preg_replace("/[a-ZA-Z0-9\s]/", "", $string));
        }
        return empty(preg_replace("/[a-ZA-Z0-9]/", "", $string));
    }

    /**
     * Check whether the given string is numeric.
     * only contains numeric character which is 0-9
     *
     * @param string $string          The string to check
     * @param bool   $allowWhitespace If `TRUE` then whitespace is allowed
     *
     * @return bool `TRUE` if valid otherwise `FALSE`
     */

    public static function isNumeric(string $string, bool $allowWhitespace = false)
    {
        if($allowWhitespace) {
            return empty(preg_replace("/[0-9\s]/", "", $string));
        }
        return empty(preg_replace("/[0-9]/", "", $string));
    }

}
