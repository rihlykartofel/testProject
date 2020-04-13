<?php

namespace App\Controllers;

$loader = new \Twig\Loader\FilesystemLoader(APP_DIR . '/views');
$twig = new \Twig\Environment($loader);

class AbstractController
{
    protected $twig;

    function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader(APP_DIR . '/views');
        $this->twig = new \Twig\Environment($loader);
        $this->twig->addGlobal('caption', 'Тест');
    }

    protected function load($name)
    {
        return $this->twig->load($name);
    }

    protected function render(string $name, array $parametrs = [])
    {
        echo $this->twig->render($name, $parametrs);
    }
    
}