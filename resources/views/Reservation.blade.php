@extends('layouts.app')


@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h3><center>Reservation</center></h3>
                    <table class="table">
                            <div class="panel-body">
                                        <li>&nbsp;&nbsp;<a href="{{ route('place') }}">Places Disponibles</a></li>
                                        <li>&nbsp;&nbsp;<a href="{{ route('index') }}">Reserver</a></li>
                            </div>
                    </table>
            </div>
        </div>
    </div>
            
@stop