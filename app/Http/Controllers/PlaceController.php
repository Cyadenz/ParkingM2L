<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index()
    {
    	$places = place::all();
        return view('Place.placeDispo', compact('places'));
    }
}
