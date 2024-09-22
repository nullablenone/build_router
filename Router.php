<?php

class Route
{
    public static function handle($method = 'GET', $path = '/', $filename = '/index.php')
    {
        $currentMethod = $_SERVER['REQUEST_METHOD'];
        $currentUri = $_SERVER['REQUEST_URI'];

        if ($currentMethod != $method) {
            return false;
        }

        $root = 'belajarphp';
        $pattern = '#^/' . $root . $path . '$#siD';

        if (preg_match($pattern, $currentUri)) {
            require_once $filename;
            exit();
        }

        return false;
    }
}
