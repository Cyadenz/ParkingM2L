@extends('layouts.app')


@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h3><center>Administration</center></h3>
                    <table class="table">
                            <div class="panel-body">
                                <td>
                                            <li>&nbsp;&nbsp;<a href="{{ route('index') }}">Gestion utilisateur</a></li>
                                            <li>&nbsp;&nbsp;<a href="{{ route('index') }}">Gestion places</a></li>
                                            <li>&nbsp;&nbsp;<a href="{{ route('index') }}">Gestion liste attentes</a></li>
                                            <li>&nbsp;&nbsp;<a href="{{ route('index') }}">Gestion historique réservations</a></li>
                            </div>
                    </table>
            </div>
        </div>
    </div>
            
@stop