<?php

/**
 * TemplateFunction.php
 * TemplateFunction class
 * @author Tim Visee
 * @version 0.1
 * @website http://timvisee.com/
 * @copyright Copyright © Tim Visee 2012-2013, All rights reserved.
 */

namespace lib\template;

/**
 * TemplateFunction class
 * Stored a defined function of a template
 * @package lib\template
 */
class TemplateFunction {

    /** @var String Function name */
    private $name;

    /** @var String Function code to execute */
    private $code;

    /**
     * Constructor
     * @param String $name Function name
     * @param String $code Function Code to execute
     */
    public function __consturct($name, $code = "") {
        $this->name = $name;
        $this->code = $code;
    }

    /**
     * Get the function name
     * @return String
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Get the function code to execute
     * @return String Function code to execute
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Set the function code to execute
     * @param $code Function code to execute
     */
    public function setCode($code) {
        $this->code = $code;
    }

    // TODO: Create execute method

    /**
     * Check whether a function name is valid or not
     * @param String $name Function name to check for
     * @return bool True if the function name is valid
     */
    public static function isValidName($name) {
        // Make sure the name isn't null
        if($name == null)
            return false;

        // Make sure the name is a string
        if(!is_string($name))
            return false;

        // Make sure the function name has a length of 1 or more characters
        if(strlen($name) < 1)
            return false;

        // Make sure the name starts with a letter or underscore, and make sure the rest is alphanumerical
        return (preg_match('/^[A-Za-z_][A-Za-z\d_]*$/', $name) === 1);
    }
}