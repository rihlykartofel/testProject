<?php

namespace App\Controllers;

class Index extends AbstractController
{
    public function index()
    {
        $this->render('base.html');

        return true;
    }

    public function show($string)
    {
        dd($string);

        return true;
    }
}