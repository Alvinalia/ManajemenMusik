<?php

namespace App\Http\Controllers;

use App\Models\Penyanyi;

class PenyanyiController extends Controller

{
    public function index()
    {
        $Penyanyi = penyanyi::all();
        return view('penyanyi',['listPenyanyi' => $Penyanyi]);
    }

}