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
 * The VerifyVariable trait is used for verifying other types of variables
 *
 * @author MadByAd <adityaaw84@gmail.com>
 *
 */

trait VerifyVariable
{

    /**
     * Check whether the given array is an indexed array
     *
     * @param array $array The array to check
     *
     * @return bool `TRUE` if it is an indexed array otherwise `FALSE`
     */

    public static function isArrayIndexed(array $array)
    {
        $index = 0;
        foreach($array as $key => $value) {
            if($key !== $index) {
                return false;
            }
            $index += 1;
        }
        return true;
    }

    /**
     * Check whether the given array is an associative array
     *
     * @param array $array The array to check
     *
     * @return bool `TRUE` if it is an associative array otherwise `FALSE`
     */

    public static function isArrayAssociative(array $array)
    {
        $index = 0;
        foreach($array as $key => $value) {
            if($key !== $index) {
                return true;
            }
            $index += 1;
        }
        return false;
    }

    /**
     * Check whether the given array is a multidimensional array
     *
     * @param array $array The array to check
     *
     * @return bool `TRUE` if it is an multidimensional array otherwise `FALSE`
     */

    public static function isArrayMultidimensional(array $array)
    {
        foreach($array as $key => $value) {
            if(!is_array($value)) {
                return false;
            }
        }
        return true;
    }

    /**
     * Check whether the GET request exist
     *
     * @param string $index
     *
     * @return bool `TRUE` if exist otherwise `FALSE`
     */

    public static function requestGetExist(string $index)
    {
        return isset($_GET[$index]);
    }

    /**
     * Check whether the POST request exist
     *
     * @param string $index
     *
     * @return bool `TRUE` if exist otherwise `FALSE`
     */

    public static function requestPostExist(string $index)
    {
        return isset($_POST[$index]);
    }

    /**
     * Check whether the FILES request exist
     *
     * @param string $index
     *
     * @return bool `TRUE` if exist otherwise `FALSE`
     */

    public static function requestFilesExist(string $index)
    {
        return isset($_FILES[$index]);
    }

    /**
     * Check whether the given value is equal to `TRUE`
     *
     * @param string|int $value
     *
     * @return bool `TRUE` if `TRUE` otherwise `FALSE`
     */

    public static function isTrue(string|int $value)
    {
        if(is_string($value)) {
            $value = strtolower($value);
            return ($value === "1" || $value === "yes" || $value === "y" || $value == "true");
        }
        return ($value === 1);
    }

    /**
     * Check whether the given value is equal to `FALSE`
     *
     * @param string|int $value
     *
     * @return bool `TRUE` if `FALSE` otherwise `FALSE`
     */

    public static function isFalse(string|int $value)
    {
        if(is_string($value)) {
            $value = strtolower($value);
            return ($value === "0" || $value === "no" || $value === "n" || $value == "false");
        }
        return ($value === 0);
    }

    /**
     * Check whether the given string is a valid JSON
     *
     * @param string $json                 The JSON to check
     * @param bool   $acceptOtherQuotation If `TRUE` then accepts quotation other than `"`
     *
     * @return bool `TRUE` if valid otherwise `FALSE`
     */

    public static function isJSON(string $json, bool $acceptOtherQuotation = true)
    {
        if($acceptOtherQuotation) {
            $json = str_replace(["'", "`"], "\"", $json);
        }
        return (json_decode($json, true) !== null);
    }

    /**
     * Check whether the given string is a valid XML document
     *
     * @param string $xml The XML document to check
     *
     * @return bool `TRUE` if valid otherwise `FALSE`
     */

    public static function isXML(string $xml)
    {
        return (xml_parse(xml_parser_create(), $xml) === 1);
    }

}
