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
    public function Suppression($id)
    {
        $Membres = user::all();
        $MembSup = user::findOrFail($id); // si Find trouve Id, le renvoie
        $MembSup->delete();
        return view('Users.index', compact('Membres'));
    }
    public function edit($id)
    {
    	$Membres = user::findOrFail($id);
        return view('Users.edit', compact('Membres'));
    }
        public function update($id)
    {
        //
    }
}
