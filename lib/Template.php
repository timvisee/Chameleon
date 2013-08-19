<?php

namespace lib;

/**
 * Template class
 * @package lib
 * @author Tim Visee
 */
class Template {

    /** @var String Template directory */
    private $dir;

    /**
     * Constructor
     * @param $dir
     */
    public function __constructor($dir) {
        $this->dir = $dir;
    }

    /**
     * Get the template directory
     * @return String Template directory
     */
    public function getTemplateDir() {
        return $this->dir;
    }

    /**
     * Set the template directory
     * @param String $dir Template directory
     */
    public function setTemplateDir($dir) {
        $this->dir = $dir;
    }

    /**
     * Load a template file by it's path
     * @param $path Path to load the template file from
     * @return null|string Template file contents, or null if failed loading
     */
    public function getTemplateFile($path) {
        // Get the file path to the template file
        $file = getTemplateFilePath($path);

        // Make sure the file path isn't null
        if($file == null)
            return null;

        // Make sure the file exists
        if(!file_exists($file))
            return null;

        // Load the file contents
        $contents = file_get_contents($file);

        // Make sure the file content is loaded successfully
        if($contents === false)
            return null;

        // Return the file contents
        return $contents;
    }

    /**
     * Get the file path to a template file
     * @param $path Path of the template file
     * @return null|string Path to the template file, or null if failed
     */
    public function getTemplateFilePath($path) {
        // Make sure the path isn't null
        if($path == null)
            return null;

        // Parse the path
        $path = trim($path, '/');

        // Construct and return the file path to the specified file
        return $this->dir . $path;
    }
}