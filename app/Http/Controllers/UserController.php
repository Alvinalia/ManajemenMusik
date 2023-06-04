<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserController extends Controller

{
    public function index()
    {
        $User = user::all();
        return view('user',['listUser' => $User]);
    }

    public function create(){
        $penyanyi = penyanyi::all();

        return view('');
    } 

    public function store(Request $request): RedirectResponse
    {
        
        $name = $request->input('nama');
        return redirect('/pembeli');
    }

    public function edit($id) {

    }
    
    public function update(Request $request, $id) {

    }
