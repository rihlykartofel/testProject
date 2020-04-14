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
        $this->render('content.html');

        return true;
    }

    public function show($string)
    {
        dd($string);

        return true;
    }
}
