<?php

namespace App2\Controller;

use App2\Model\Genre;

class GenreController
{
    public function index()
    {
        $genre = new Genre();

        return $genre->findAll();
    }
}