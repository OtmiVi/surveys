<?php

namespace App\Controllers;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

abstract class Controller extends \App\Core\Controller
{
    /**
     * @param string $view
     * @param array $data
     * @return void
     */
    protected function view(string $view, array $data = []): void
    {
        $loader = new FilesystemLoader(__DIR__ . '\..\views');
        $twig = new Environment($loader);
        $template = $twig->load($view .'.html');

        echo $template->render($data);
    }

}