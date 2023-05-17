<?php

namespace Makkari\Controllers;


class View
{
    private $viewsDirectory;

    public function __construct($viewsDirectory)
    {
        $this->viewsDirectory = $viewsDirectory;
    }

    public function render($viewName, $data = array())
    {
        // Construct the full path to the view file
        $viewPath = $this->viewsDirectory . '/' . $viewName . '.php';

        // Check if the view file exists
        if (!file_exists($viewPath)) {
            throw new \Exception('View file not found: ' . $viewPath);
        }
        // Extract the data into variables for use in the view file
        extract($data);

        // Start output buffering to capture the generated HTML
        // ob_start();

        // Include the view file, which will output the HTML
        require_once $viewPath;

        // Get the generated HTML from the output buffer and return it
        // return ob_get_clean();
    }
}
