@extends('layouts.app')


@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h3><center>Réservation</center></h3>
                    <table class="table">
                            <div class="panel-body">
                                <td>
                                    <ul>
                                        <li><a href="{{ route('place') }}">Places Disponibles</a></li>
                                        <li><a href="{{ route('MesReserv') }}">Mes réservations</a></li>
                                    </ul>
                                </td>
                            </div>
                    </table>
            </div>
        </div>
    </div>
            
@stop