<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Requests;
use App\Models\Place;
use App\Models\reserver;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;

        $users= \DB::table('users')
            ->select('id', 'CompteValide')
            ->where('id', $id)
            ->get();

        $ComptesValid = \DB::table('users')
            ->select('*')
            ->where('CompteValide', 1)
            ->get()->count();

        $PlacesReserv = \DB::table('places')
            ->select('*')
            ->where('reserver', 1)
            ->get()->count();


    	$places = place::all();
        return view('Place.placeDispo', compact('places', 'users', 'ComptesValid', 'PlacesReserv'));
    }
    public function reserv($numplace)
    {
        $id = Auth::user()->id;

        \DB::table('places')
        ->where('numplace', $numplace)
        ->update(['reserver' => 1]);

        \DB::table('users')
        ->where('id', $id)
        ->update(['idPlacePreReserv' => $numplace]);

        \DB::table('users')
        ->where('id', $id)
        ->update(['CompteValide' => 1]);


        \DB::table('reserver')->insert(
        ['finperiode' => '2015-12-12', 
        'id_users' => $id, 
        'id_place' => $numplace,
        'debutperiode' => '2015-12-12']
        );

        $place = \DB::table('places')
                ->where('numplace', $numplace)
                ->get();

        return view('Place.placeReserv', compact('place'));
    }
    public function PlaceEdit()
    {
            $join = \DB::table('users')
            ->join('reserver', 'users.id', '=', 'reserver.id_users')
            ->select('*')
            ->get();
        return view('Place.placeEdit', compact('join'));
    }
    public function SupPlace($id_place)
    {
        \DB::table('places')
        ->where('numplace', $id_place)
        ->update(['reserver' => 0]);

        \DB::table('users')
                ->where('idPlacePreReserv', $id_place)
                ->update(['CompteValide' => 0]);

        \DB::table('reserver')->where('id_place', '=', $id_place)->delete();

        $join = \DB::table('users')
            ->join('reserver', 'users.id', '=', 'reserver.id_users')
            ->select('*')
            ->get();

        return view('Place.placeEdit', compact('join'));
    }
    public function PlaceAttrib($id_place)
    {

            \DB::table('reserver')
            ->where('id_place', $id_place)
            ->update(['valider' => 1,
            'debutperiode' => '2018-10-10',
            'finperiode' => '2018-10-10']);


             $join = \DB::table('users')
            ->join('reserver', 'users.id', '=', 'reserver.id_users')
            ->select('*')
            ->get();
        return view('Place.placeEdit', compact('join'));
    }
     public function Uneplace($id_place)
    {
        $uti = \DB::table('users')
            ->join('reserver', 'users.id', '=', 'reserver.id_users')
            ->select('*')
            ->where('reserver.id_place', $id_place)
            ->get();

        return view('Place.AttribPlace', compact('uti'));
    }
    public function store(Request $request, $id)
    {
        $this->validate($request, [
            'debutperiode'=>'Date',
            'finperiode'=>'Date',
        ]);

        \DB::table('reserver')
            ->where('id_users', $id)
            ->update(['valider' => 1,
            'debutperiode' => $request->debutperiode,
            'finperiode' => $request->finperiode]);
            
            $join = \DB::table('users')
            ->join('reserver', 'users.id', '=', 'reserver.id_users')
            ->select('*')
            ->get();
        return view('Place.placeEdit', compact('join'));
    }
    public function MesReserv()
    {
        $id = Auth::user()->id;

        $join = \DB::table('users')
            ->join('reserver', 'users.id', '=', 'reserver.id_users')
            ->select('*')
            ->where('id_users', $id)
            ->get();

        return view('Place.mesReservations', compact('join'));
    }

}
