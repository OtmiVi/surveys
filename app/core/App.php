<?php

namespace App\Core;

use Exception;

class App
{

    private $controller = 'home';
    private $method = 'index';
    private $params = [];


    public function __construct()
    {
        try {
            $url = $this->parseUrl();
            if (!empty($url)) {
                if (file_exists("../app/controllers/" . ucfirst($url[0]) . "Controller.php")) {
                    $this->controller = $url[0];
                    unset($url[0]);
                }
            }

            $this->controller = new ('\App\Controllers\\' . ucfirst($this->controller) . "Controller");
            if (isset($url[1])) {
                if (method_exists($this->controller, $url[1])) {
                    $this->method = $url[1];
                    unset($url[1]);
                }
            }

            $this->params = $url ? array_values($url) : [];
            call_user_func_array([$this->controller, $this->method], $this->params);
        } catch (Exception $exception) {
            dd($exception);
        }

    }

    /**
     * @return array
     */
    private function parseUrl(): array
    {
        if(isset($_GET['url']))
        {
            return explode('/', filter_var(rtrim( $_GET['url'], "/"), FILTER_SANITIZE_URL));
        }
        return [];
    }

}