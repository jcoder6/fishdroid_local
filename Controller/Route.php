<?php

namespace Makkari\Controllers;

class Route
{
    public static function contentToRender(): void
    {
        $uri = self::processURI();

        if (class_exists($uri['controller'])) {
            $controller = $uri['controller'];
            $method = $uri['method'];
            $args = $uri['args'];

            // Check if the method exists in the controller
            if (method_exists($controller, $method)) {
                //Now, the magic
                $args ? $controller::{$method}(...$args) :
                    $controller::{$method}();
            } else {
                // Handle the case where the method does not exist
                echo "Error:Page Not Found";
                http_response_code(404);
                exit();
            }
        }
    }

    public static function getURI(): array
    {
        $path_info = $_SERVER['REQUEST_URI'] ?? '/';
        return explode('/', $path_info);
    }

    private static function processURI(): array
    {
        $controllerPart = self::getURI()[1] ?? '';
        $methodPart = self::getURI()[2] ?? '';
        $numParts = count(self::getURI());
        $argsPart = [];
        for ($i = 3; $i < $numParts; $i++) {
            $argsPart[] = self::getURI()[$i] ?? '';
        }

        //Let's create some defaults if the parts are not set
        $controller = !empty($controllerPart) ?
            'Makkari\\Controllers\\' . $controllerPart . '' :
            'Makkari\\Controllers\\App';

        $method = !empty($methodPart) ?
            $methodPart :
            'index';

        $args = !empty($argsPart) ?
            $argsPart :
            [];

        return [
            'controller' => $controller,
            'method' => $method,
            'args' => $args
        ];
    }
}
