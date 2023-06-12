<?php

namespace App2\Controller;

use Core\Controller;

class SiteController extends Controller
{
    public function contact()
    {
        $this->renderView('app', [
            'title' => 'Contact'
        ]);
    }

    public function about()
    {
        $this->renderView('app', [
            'title' => 'About'
        ]);
    }
}