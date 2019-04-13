<?php

namespace App;

/**
 * Class Router
 * @package App
 */
class Router
{
    /**
     * Passes the requested route to the resolver
     *
     * @return mixed
     * @throws \Exception
     */
    public static function start()
    {
        $routes = require __DIR__ . '/routes.php';
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        try {
            return (new self)->resolve($routes[$url]);
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    /**
     * Resolves the requested controller and action
     *
     * @param string $handler
     *
     * @return mixed
     * @throws \Exception
     */
    private function resolve(string $handler)
    {
        [$controllerClass, $action] = explode('@', $handler);

        $namespacedClass = 'App\\Controllers\\' . $controllerClass;

        if (!class_exists($namespacedClass)) {
            throw new \Exception('ERROR: Class \'' . $controllerClass . '\' does not exist.');
        }

        $controller = new $namespacedClass;

        if (!method_exists($controller, $action)) {
            throw new \Exception('ERROR: Action \'' . $action . '\' does not exist.');
        }

        return $controller->$action();
    }

}
