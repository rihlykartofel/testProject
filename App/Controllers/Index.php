<?php

namespace App\Controllers;

class Index extends AbstractController
{
    public function index()
    {
        $this->render('index.html');

        return true;
    }

    public function test()
    {
        // sleep(5);
        $this->render('content.html');

        return true;
    }

    public function test2()
    {
        sleep(5);
        $this->render('TEST2');

        return true;
    }

    public function show($string)
    {
        dd($string);

//        return true;
    }
}
