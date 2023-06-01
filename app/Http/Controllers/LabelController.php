<?php

namespace App\Http\Controllers;

use App\Models\Label;

class LabelController extends Controller

{
    public function index()
    {
        $Label = label::all();
        return view('label',['listLabel' => $Label]);
    }

}