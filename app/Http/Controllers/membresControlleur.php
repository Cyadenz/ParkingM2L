<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;

class membresControlleur extends Controller
{
    public function index()
    {
    	$Membres = user::all();
        return view('Users.index', compact('Membres'));
    }

    public function update()
    {
        return view('Users.update', compact('Membres'));
    }

    public function Suppression($id)
    {
        $MembSup = user::findOrFail($id);
        $MembSup->delete();
        $Membres = user::all();
        return view('Users.index', compact('Membres'));
    }

    public function create($id)
    {
        $Membres = user::findOrFail($id);
        return view('Users.edit', compact('Membres'));
    }

    public function store(Request $request, $id)
    {
        $this->validate($request, [
            'id'=>'Integer',
            'prenom'=>'string',
            'name'=>'string',
            'email'=>'string',
            'tel'=>'Integer',
            'admin'=>'boolean',
        ]);
        $user = User::findorFail($id);
        $user -> update([
            'id' => $request->id,
            'prenom' => $request->prenom,
            'name' => $request->name,
            'email' => $request->email,
            'tel' => $request->tel,
            'admin' => $request->admin,
    ]);
        return redirect()->route('index',$user);
    }
}
