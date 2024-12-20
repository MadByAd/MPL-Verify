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
     * Check whether the string is all UPPERCASE character
     *
     * @param string $string The string to check
     * @param bool   $allowWhitespace If `TRUE` then whitespace is allowed
     *
     * @return bool `TRUE` if valid otherwise `FALSE`
     */

    public static function isUppercased(string $string, bool $allowWhitespace = false)
    {
        if($allowWhitespace) {
            return empty(preg_replace("/[^a-z]/", "", $string));
        }
        return empty(preg_replace("/[^a-z\s]/", "", $string));
    }

    /**
     * Check whether the given string has uppercase character
     *
     * @param string $string The string to check
     *
     * @return bool `TRUE` if contain alphabetical characters otherwise `FALSE`
     */

    public static function hasUppercase(string $string)
    {
        return preg_match("/[A-Z]/", $string) == 1;
    }

    /**
     * Check whether the string is all LOWERCASE character
     *
     * @param string $string The string to check
     * @param bool   $allowWhitespace If `TRUE` then whitespace is allowed
     *
     * @return bool `TRUE` if valid otherwise `FALSE`
     */

    public static function isLowercased(string $string, bool $allowWhitespace = false)
    {
        if($allowWhitespace) {
            return empty(preg_replace("/[^A-Z]/", "", $string));
        }
        return empty(preg_replace("/[^A-Z\s]/", "", $string));
    }

    /**
     * Check whether the given string has lowercase character
     *
     * @param string $string The string to check
     *
     * @return bool `TRUE` if contain alphabetical characters otherwise `FALSE`
     */

    public static function hasLowercase(string $string)
    {
        return preg_match("/[a-z]/", $string) == 1;
    }


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
        return ($length >= $minimum && $length <= $maximum);
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
     * Check whether the given string does NOT have a whitespace
     *
     * @param string $string The string to check
     *
     * @return bool `TRUE` if contain whitespace otherwise `FALSE`
     */

    public static function doesntHaveWhitespace(string $string)
    {
        return preg_match("/[\s]/", $string) != 1;
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
            return empty(preg_replace("/[a-zA-Z\s]/", "", $string));
        }
        return empty(preg_replace("/[a-zA-Z]/", "", $string));
    }

    /**
     * Check whether the given string has alphabetical character
     * contains alphabetical character which is A-Z
     *
     * @param string $string The string to check
     *
     * @return bool `TRUE` if contain alphabetical characters otherwise `FALSE`
     */

    public static function hasAlphabetical(string $string)
    {
        return preg_match("/[a-zA-Z]/", $string) == 1;
    }

    /**
     * Check whether the given string does NOT have alphabetical characters.
     * doesn't contains alphabetical character which is A-Z
     *
     * @param string $string          The string to check
     * @param bool   $allowWhitespace If `TRUE` then whitespace is allowed
     *
     * @return bool `TRUE` if valid otherwise `FALSE`
     */

    public static function doesntHaveAlphabetical(string $string, bool $allowWhitespace = false)
    {
        if($allowWhitespace) {
            return empty(preg_replace("/[^a-zA-Z]/", "", $string));
        }
        return empty(preg_replace("/[^a-zA-Z\s]/", "", $string));
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
            return empty(preg_replace("/[a-zA-Z0-9\s]/", "", $string));
        }
        return empty(preg_replace("/[a-zA-Z0-9]/", "", $string));
    }

    /**
     * Check whether the given string has alphanumeric character
     * contains alphanumeric character which is A-Z and 0-9
     *
     * @param string $string The string to check
     *
     * @return bool `TRUE` if contain alphanumeric characters otherwise `FALSE`
     */

    public static function hasAlphanumeric(string $string)
    {
        return preg_match("/[a-zA-Z0-9]/", $string) == 1;
    }

    /**
     * Check whether the given string does NOT have alphanumeric characters.
     * doesn't contains alphanumeric character which is A-Z and 0-9
     *
     * @param string $string          The string to check
     * @param bool   $allowWhitespace If `TRUE` then whitespace is allowed
     *
     * @return bool `TRUE` if valid otherwise `FALSE`
     */

    public static function doesntHaveAlphanumeric(string $string, bool $allowWhitespace = false)
    {
        if($allowWhitespace) {
            return empty(preg_replace("/[^a-zA-Z0-9]/", "", $string));
        }
        return empty(preg_replace("/[^a-zA-Z0-9\s]/", "", $string));
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

    /**
     * Check whether the given string has numeric character
     * contains numeric character which is 0-9
     *
     * @param string $string The string to check
     *
     * @return bool `TRUE` if contain numeric character otherwise `FALSE`
     */

    public static function hasNumeric(string $string)
    {
        return preg_match("/[0-9]/", $string) == 1;
    }

    /**
     * Check whether the given string does NOT have numeric characters.
     * doesn't contains numeric character which is 0-9
     *
     * @param string $string          The string to check
     * @param bool   $allowWhitespace If `TRUE` then whitespace is allowed
     *
     * @return bool `TRUE` if valid otherwise `FALSE`
     */

    public static function doesntHaveNumeric(string $string, bool $allowWhitespace = false)
    {
        if($allowWhitespace) {
            return empty(preg_replace("/[^0-9]/", "", $string));
        }
        return empty(preg_replace("/[^0-9\s]/", "", $string));
    }

    /**
     * Check whether the given string contains special characters.
     * only contains special character which is character other than the alphanumeric characters
     *
     * @param string $string          The string to check
     * @param bool   $allowWhitespace If `TRUE` then whitespace is allowed
     *
     * @return bool `TRUE` if valid otherwise `FALSE`
     */

    public static function containsSpecialChar(string $string, bool $allowWhitespace = false)
    {
        return self::doesntHaveAlphanumeric($string, $allowWhitespace);
    }

    /**
     * Check whether the given string has a special characters.
     * contains special character which is character other than the alphanumeric characters
     *
     * @param string $string          The string to check
     * @param bool   $allowWhitespace If `TRUE` then whitespace is allowed
     *
     * @return bool `TRUE` if contains special characters otherwise `FALSE`
     */

    public static function hasSpecialChars(string $string)
    {
        return preg_match("/[^a-zA-Z0-9]/", $string) == 1;
    }

    /**
     * Check whether the given string does NOT have special characters.
     * doesn't contains special character which is character other than the alphanumeric characters
     *
     * @param string $string          The string to check
     * @param bool   $allowWhitespace If `TRUE` then whitespace is allowed
     *
     * @return bool `TRUE` if valid otherwise `FALSE`
     */

    public static function doesntHaveSpecialChars(string $string, bool $allowWhitespace = false)
    {
        return self::isAlphanumeric($string, $allowWhitespace);
    }

    /**
     * Check whether the given string is a valid day name e.g (Sunday, Monday)
     *
     * @param string $string The string to check
     *
     * @return bool `TRUE` if valid otherwise `FALSE`
     */

    public static function isDayName(string $string)
    {
        $day = [
            "mondays",
            "tuesdays",
            "wednesdays",
            "thursdays",
            "fridays",
            "saturdays",
            "sundays",
            "monday",
            "tuesday",
            "wednesday",
            "thursday",
            "friday",
            "saturday",
            "sunday",
            "mon",
            "tues",
            "wed",
            "thurs",
            "fri",
            "sat",
            "sun",
            "m",
            "tue",
            "w",
            "th",
            "f",
            "s",
        ];
        return in_array(strtolower($string), $day);
    }

    /**
     * Check whether the given string is a valid month name e.g (January, February)
     *
     * @param string $string The string to check
     *
     * @return bool `TRUE` if valid otherwise `FALSE`
     */

    public static function isMonthName(string $string)
    {
        $month = [
            "january",
            "february",
            "march",
            "april",
            "may",
            "june",
            "july",
            "august",
            "september",
            "october",
            "november",
            "december",
            "jan",
            "feb",
            "mar",
            "apr",
            "may",
            "jun",
            "jul",
            "aug",
            "sep",
            "sept",
            "oct",
            "nov",
            "dec",
        ];
        return in_array(strtolower($string), $month);
    }

}
