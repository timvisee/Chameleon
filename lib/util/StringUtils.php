<?php

/**
 * StringUtils.php
 * StringUtils class
 * String utilities class.
 * @author Tim Visee
 * @website http://timvisee.com/
 * @copyright Copyright © Tim Visee 2013, All rights reserved.
 */

namespace lib\util;

/**
 * StringUtils class
 * @package lib\util
 */
class StringUtils {

    /**
     * Check whether a string contains a substring
     * @param $haystack String to check in
     * @param $needle Sub string to check for
     * @return bool True if the string contains the substring
     */
    public static function contains($haystack, $needle) {
        return (strpos($haystack, $needle) !== false);
    }

    /**
     * Check whether a string starts with a substring
     * @param $haystack String to check in
     * @param $needle Sub String to check for
     * @param bool $ignore_case True to ignore case
     * @return bool False if not
     */
    public static function startsWith($haystack, $needle, $ignore_case = false) {
        // Make sure the needle length is not longer than the haystack
        if(strlen($needle) > strlen($haystack))
            return false;

        // Compare the strings, check if it should be case sensitive
        if(!$ignore_case)
            return (substr($haystack, 0, strlen($needle)) == $needle);
        else
            return (strtolower(substr($haystack, 0, strlen($needle))) == strtolower($needle));
    }
}