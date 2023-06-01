<?php

namespace App\Http\Controllers;

use App\Models\GenreMusik;

class GenreMusikController extends Controller

{
    public function index()
    {
        $GenreMusik = GenreMusik::all();
        return view('GenreMusik',['listGenreMusik' => $GenreMusik]);
    }

}
