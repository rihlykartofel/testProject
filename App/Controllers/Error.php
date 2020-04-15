<?php

namespace App\Controllers;

class Error extends AbstractController
{
    public function notFound()
    {
        $this->render('404.html');
        return true;
    }
}