<?php

class TemplateVariable {

    /** @var String Variable name */
    private $name;

    /** @var mixed Variable value */
    private $val;

    public function __construct($name) {
        $this->name = $name;
    }

    public static function isValidName($name) {
        // Make sure the name param isn't null
        if($name == null)
            return false;

        // Make sure the variable name length is 1 or greater
        if(strlen($name) < 1)
            return false;

        // TODO: Variable max length

        // TODO: Allowed charactars
    }
}