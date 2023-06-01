<?php

namespace App\Http\Controllers;

use App\Models\Musik;

class MusikController extends Controller

{
    public function index()
    {
        $Musik = musik::all();
        return view('musik',['listMusik' => $Musik]);
    }

}