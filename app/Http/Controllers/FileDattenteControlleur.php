<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;

class FileDattenteControlleur extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $rangMax = \DB::table('users')->max('rang', 0);

        \DB::table('users')
            ->where('id', $id)
            ->whereNull('rang')
            ->update(['rang' => $rangMax+1]);

        $users = \DB::table('users')
            ->select('*')
            ->where('id', $id)
            ->get();

        return view('FileDattente.FileDatt',compact('users'));
    }

    public function indexe()
    {
        $id = Auth::user()->id;

        $users = \DB::table('users')
            ->select('*')
            ->where('id', $id)
            ->get();

        return view('FileDattente.ListeAttente',compact('users'));
    }

    public function create()
    {
        $users = \DB::table('users')
            ->select('*')
            ->get();

        return view('FileDattente.ListeAttentesAdmin',compact('users'));
    }
     
    public function Supprimer($id_user)
    {

        \DB::table('users')
            ->where('id', $id_user)
            ->update(['rang' => null]); 

        $users = \DB::table('users')
            ->select('*')
            ->get();

        return view('FileDattente.ListeAttentesAdmin',compact('users'));
    }  

    public function UneFile($id_user)
    {
        $user = \DB::table('users')
            ->where('id', $id_user)
            ->select('*')
            ->get();

        return view('FileDattente.UneListe',compact('user'));
    }

    public function store(Request $request, $id_user)
    {
        $this->validate($request, [
            'rang'=>'Integer',
        ]);
        $user = User::findorFail($id_user);
        $user -> update([
            'rang' => $request->rang,
    ]);
        $users = \DB::table('users')
            ->select('*')
            ->get();

        return view('FileDattente.ListeAttentesAdmin',compact('users'));
    } 



}