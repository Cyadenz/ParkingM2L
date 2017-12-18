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
}