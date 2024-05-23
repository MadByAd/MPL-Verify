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
 * The VerifyInt trait contains method for verifying integer
 *
 * @author MadByAd <adityaaw84@gmail.com>
 *
 */

trait VerifyInt
{

    /**
     * Check whether the given int is inside the specified range
     *
     * @param int $int The int to check
     * @param int $max The maximum int
     * @param int $min The minimum int
     *
     * @return bool `TRUE` if valid otherwise `FALSE`
     */

    public static function inRange(int $int, int $max = 0, int $min = 0)
    {
        return ($int >= $min && $int <= $max);
    }

    /**
     * Check whether the given integer is a day in number
     *
     * @param int $int The int to check
     *
     * @return bool `TRUE` if valid otherwise `FALSE`
     */

    public static function isDayNumber(int $int)
    {
        return ($int >= 1 && $int <= 31);
    }

    /**
     * Check whether the given integer is a month in number
     *
     * @param int $int The int to check
     *
     * @return bool `TRUE` if valid otherwise `FALSE`
     */

    public static function isMonthNumber(int $int)
    {
        return ($int >= 1 && $int <= 12);
    }

    /**
     * Check whether the given integer is a year
     *
     * @param int $int The int to check
     *
     * @return bool `TRUE` if it is a year otherwise `FALSE`
     */

    public static function isYear(int $int)
    {
        return ($int >= (date("Y") - 100) && $int <= (date("Y") + 100));
    }

    /**
     * Check whether the given year will result
     * in the user being older 13 years
     *
     * @param int $year The year the user is born
     *
     * @return bool `TRUE` if the user is already 13+ otherwise `FALSE`
     */

    public static function is13plus(int $year)
    {
        $age = date("Y") - $year;
        return ($age >= 13);
    }

    /**
     * Check whether the given year will result
     * in the user being older 18 years
     *
     * @param int $year The year the user is born
     *
     * @return bool `TRUE` if the user is already 18+ otherwise `FALSE`
     */

    public static function is18plus(int $year)
    {
        $age = date("Y") - $year;
        return ($age >= 18);
    }

}
