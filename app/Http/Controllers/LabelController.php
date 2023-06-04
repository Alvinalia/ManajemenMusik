<?php

namespace App\Http\Controllers;

use App\Models\Label;

class LabelController extends Controller

{
    public function index() {
        $Label = Label::with('Penyanyi')->get(); 
        return view('label',['listLabel' => $Label]);
    }

}
