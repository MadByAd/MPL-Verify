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
 * The VerifyFormat trait contains method for verifying formatted input e.g (username, name, emails, etc.)
 *
 * @author MadByAd <adityaaw84@gmail.com>
 *
 */

trait VerifyFormat
{

    /**
     * Check whether the given string is a valid name.
     * a typical name will usually only allow alphabetical character and space
     *
     * @param string $name The name to check
     *
     * @return bool `TRUE` if valid otherwise `FALSE`
     */

    public static function name(string $name)
    {
        return empty(preg_replace("/[a-zA-Z ]/", "", $name));
    }

    /**
     * Check whether the given string is a valid username.
     * a typical username will usually only allow alphanumerical character, some
     * special character underscore `_` and at `@`, and no space
     *
     * @param string $username The username to check
     *
     * @return bool `TRUE` if valid otherwise `FALSE`
     */

    public static function username(string $username)
    {
        return empty(preg_replace("/[a-zA-Z0-9_@]/", "", $username));
    }

    /**
     * Check whether the given string is a valid email address.
     *
     * @param string $email The email address to check
     *
     * @return bool `TRUE` if valid otherwise `FALSE`
     */

    public static function email(string $email)
    {
        return empty(preg_replace("/[a-zA-Z0-9!#$%&'*+-\/=?^_`{|}~;]{1,255}@[a-zA-Z0-9]{1,}(\.[a-z]{2,4}){1,2}/", "", $email, 1));
    }

    /**
     * Check whether the given string is a valid phone number.
     *
     * @param string $phone The phone number to check
     *
     * @return bool `TRUE` if valid otherwise `FALSE`
     */

    public static function phone(string $phone)
    {
        return empty(preg_replace("/\+\d{1,3}(| |-)\d{3,4}(| |-)\d{4}(| |-)\d{4}/", "", $phone, 1));
    }

    /**
     * Check whether the given url is a valid url
     *
     * @param string $url The url to check
     *
     * @return bool `TRUE` if valid otherwise `FALSE`
     */

    public static function url(string $url)
    {
        return empty(preg_replace("/http(s|):\/\/[a-zA-Z0-9]{1,}(\.[a-zA-Z]{2,4}){1,2}(\/[^\s]{1,}|\/|){1,}/", "", $url, 1));
    }

    /**
     * Check whether the given ip address is a valid ipv4 address
     *
     * @param string $ipAddress The IP Address to check
     *
     * @return bool `TRUE` if valid otherwise `FALSE`
     */

    public static function ipv4(string $ipAddress)
    {
        return (filter_var($ipAddress, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) !== false);
    }

    /**
     * Check whether the given ip address is a valid ipv6 address
     *
     * @param string $ipAddress The IP Address to check
     *
     * @return bool `TRUE` if valid otherwise `FALSE`
     */

    public static function ipv6(string $ipAddress)
    {
        return (filter_var($ipAddress, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) !== false);
    }

    /**
     * Check whether the given string is a valid hex color
     *
     * @param string $string The string to check
     *
     * @return bool `TRUE` if valid otherwise `FALSE`
     */

    public static function isHexColor(string $string)
    {
        return empty(preg_replace("/#([0-9a-fA-F]{8}|[0-9a-fA-F]{6}|[0-9a-fA-F]{4}|[0-9a-fA-F]{3})/", "", $string, 1));
    }

    /**
     * Check whether the given string is a valid hsl color
     *
     * @param string $string The string to check
     *
     * @return bool `TRUE` if valid otherwise `FALSE`
     */

    public static function isHSLColor(string $string)
    {
        return empty(preg_replace("/hsl\([0-9]{1,3},[ ]{0,}[0-9]{1,3}\%,[ ]{0,}[0-9]{1,3}\%\)/", "", $string, 1));
    }

    /**
     * Check whether the given string is a valid rgb color
     *
     * @param string $string The string to check
     *
     * @return bool `TRUE` if valid otherwise `FALSE`
     */

    public static function isRGBColor(string $string)
    {

        $regex = "/(rgb|rgba)\(([0-9]{1,3}[ ]{0,}[,]{1}[ ]{0,})([0-9]{1,3}[ ]{0,}[,]{1}[ ]{0,})([0-9]{1,3}[ ]{0,})([,]{1}[ ]{0,}[0-9]{1,3}|)\)/";
        $matches = [];

        preg_match_all($regex, "rgba(255, 255, 256, 255)", $matches);

        if($matches[1][0] == "rgb") {
            if(!empty($matches[5][0])) {
                return false;
            }
            for($i = 2; $i <= 4; $i++) {
                $value = intval($matches[$i][0]);
                if($value > 255) {
                    return false;
                }
            }
        } else {
            if(empty($matches[5][0])) {
                return false;
            }
            for($i = 2; $i <= 5; $i++) {
                $value = intval($matches[$i][0]);
                if($value > 255) {
                    return false;
                }
            }
        }

        return true;

    }

}
