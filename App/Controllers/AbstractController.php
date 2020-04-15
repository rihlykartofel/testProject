<?php

namespace App\Controllers;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class AbstractController
{
    protected $twig;

    function __construct()
    {
        $loader = new FilesystemLoader(APP_DIR . '/views');
        $this->twig = new Environment($loader);
        $this->twig->addGlobal('caption', 'Тест');

        $this->getTopNav();
    }

    private function getTopNav()
    {
        define('TNAV_DIR', BASE_DIR . '/Config/Navigation/TopNav/');

        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri = substr($uri, 1);

        $segments = explode('/',$uri);
        $length = count($segments);

        for ($i = 0; $i < $length; ++$i)
        {
            $filename = '';

            foreach ($segments as $segment)
            {
                $filename .= $segment . '.';
            } 

            $filename .= 'nav';
            $path = TNAV_DIR . $filename;

            $exist = file_exists($path);

            if ($exist)
            {
                $topNav = require $path;
                $this->twig->addGlobal('topNav', $topNav);
                return;  
            } 
            else array_pop($segments);

        }     
    }

    protected function load($name)
    {
        return $this->twig->load($name);
    }

    protected function render($name, array $parameters = [])
    {
        echo $this->twig->render($name, $parametrs);
    }
    
}