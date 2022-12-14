<?php

namespace App\Services;

class Router
{
    private static $list = [];


    public static function page($uri, $pageName)
    {
        self::$list[] =
            [
                "uri" => $uri,
                "page" => $pageName
            ];
    }

    public static function post($uri, $class, $method,$formdata = false,$files = false)
    {
        self::$list[] =
            [
                "uri" => $uri,
                "class" => $class,
                "method" => $method,
                "formdata" => $formdata,
                "files" => $files,
            ];
    }

    public static function enable()
    {
        foreach (self::$list as $route) {
//            de($route);
            if ($_SERVER['REQUEST_URI'] === $route['uri']) {

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $action = new $route['class'];
                    $method = $route['method'];
                    if ($route['formdata'] && $route['files'] ){

                        $action->$method($_POST,$_FILES);
                    }elseif($route['formdata'] && !$route['files'] ){
                        $action->$method($_POST);
                    }else{
                        $action->$method();
                    }
                } elseif(isset($route['page'])) {

                    require_once 'views/pages/' . $route['page'] . '.php';
                    die();
                }
            }

        }
        self::notFound();

    }


    public static function notFound()
    {
        require_once 'views/errors/404.php';
    }

}