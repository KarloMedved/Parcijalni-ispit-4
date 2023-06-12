<?php

use App2\Controller\GenreController;
use App2\Controller\MediaController;
use App2\Controller\SiteController;
use Core\Router;

Router::get('/about', [SiteController::class, 'about']);

Router::get('/contact', [SiteController::class, 'contact']);

Router::get('/genres', [GenreController::class, 'index']);

Router::get('/media', [MediaController::class, 'index']);

Router::get('/media/home', [MediaController::class, 'home']);