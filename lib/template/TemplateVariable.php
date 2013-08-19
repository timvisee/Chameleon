<?php

/**
 * TemplateVariable.php
 * TemplateVariable class
 * @author Tim Visee
 * @version 0.1
 * @website http://timvisee.com/
 * @copyright Copyright © Tim Visee 2012-2013, All rights reserved.
 */

namespace lib\template;

/**
 * TemplateVariable class
 * Stores a variable for a template
 * @package lib\template
 * @author Tim Visee
 */
class TemplateVariable {

    /** @var String Variable name */
    private $name;

    /** @var mixed Variable value */
    private $val;

    /**
     * Constructor
     * @param $name Variable name
     */
    public function __construct($name) {
        $this->name = $name;
    }

    /**
     * Get the variable name
     * @return String Variable name
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Get the variable value
     * @return mixed Variable value, null if not set
     */
    public function getValue() {
        return $this->val;
    }

    /**
     * Set the variable value
     * @param $val Variable value
     */
    public function setValue($val) {
        $this->val = $val;
    }

    /**
     * Check whether the variables value equals to null
     * @return bool True if the variables value equals to null
     */
    public function isNull() {
        return isset($this->val);
    }

    /**
     * Check whether the variables value is empty (null, empty string, empty array)
     * @return bool True if the variables value is empty
     */
    public function isEmpty() {
        // Make sure the variable value doesn't equal to null
        if(isNull())
            return true;

        // Check if the value is an array
        if(is_array($this->var))
            return (sizeof($this->var) <= 0);

        // Check if the value is a string
        if(is_string($this->var))
            return (strlen($this->var) <= 0);

        return true;
    }

    /**
     * Clear the varaiable value (Sets the value to null)
     */
    public function clear() {
        $this->val = null;
    }

    /**
     * Check whether a variable name is valid or not
     * @param $name The variable name to check
     * @return bool True if the variable name is valid
     */
    public static function isValidName($name) {
        // Make sure the name param isn't null
        if($name == null)
            return false;

        // Make sure the variable name length is 1 or greater
        if(strlen($name) < 1)
            return false;

        // Make sure the name starts with a letter or underscore, and make sure the rest is alphanumerical
        return (preg_match('/^[A-Za-z_][A-Za-z\d_]*$/', $name) === 1);
    }
}