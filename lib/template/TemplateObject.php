<?php

/**
 * TemplateObject.php
 * TemplateObject class
 * @author Tim Visee
 * @version 0.1
 * @website http://timvisee.com/
 * @copyright Copyright © Tim Visee 2012-2013, All rights reserved.
 */

namespace lib\template;

/**
 * TemplateObject class
 * Stores a defined object for a template
 * @package lib\template
 * @author Tim Visee
 */
class TemplateObject {

    /** @var String Object name */
    private $name;

    /**
     * Constructor
     * @param String Object name
     */
    public function __construct($name) {
        $this->name = $name;
    }

    /**
     * Get the object name
     * @return String Object name
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Check whether an object name is valid or not
     * @param String $name Object name to check for
     * @return bool True if the object name is valid
     */
    public static function isValidName($name) {
        // Make sure the name isn't null
        if($name == null)
            return false;

        // Make sure the name is a string
        if(!is_string($name))
            return false;

        // Make sure the object name has a length of 1 or more characters
        if(strlen($name) < 1)
            return false;

        // Make sure the name starts with a letter or underscore, and make sure the rest is alphanumerical
        return (preg_match('/^[A-Za-z_][A-Za-z\d_]*$/', $name) === 1);
    }
}