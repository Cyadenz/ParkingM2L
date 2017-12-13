<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class membresControlleur extends Controller
{
    public function index()
    {
    	$Membres = user::all();
        return view('Users.index', compact('Membres'));
    }
    public function show($id)
    {
        $Membres = user::findOrFail($id);
        return view('Users.show', compact('Membres'));
    }
    public function fdp()
    {
    	
    }
}
