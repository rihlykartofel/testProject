<?php

namespace App\Controllers;

class Error extends \App\Controllers\AbstractController
{
    public function notFound()
    {
        $this->render('404.html');
    }
}