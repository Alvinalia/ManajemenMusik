<?php

namespace App\Http\Controllers;

use App\Models\Genre;

class GenreController extends Controller

{
    public function index()
    {
        $Genre = Genre::all();
        return view('Genre',['listGenre' => $Genre]);
    }

}
