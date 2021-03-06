@extends('layouts.app')


@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h3><center>Réservation</center></h3>
                    <table class="table">
                            <div style="text-align: right;" class="panel-body">
                                    <a align="right" href="{{ url('welcome') }}">Retour arrière</a>
                                <td>
                                    <ul>
                                        <li><a href="{{ route('place') }}">Places Disponibles</a></li>
                                        <li><a href="{{ route('MesReserv') }}">Mes réservations</a></li>
                                        <li><a href="{{ route('MaListe') }}">Liste d'attente</a></li>
                                    </ul>
                                </td>
                            </div>
                    </table>
            </div>
        </div>
    </div>
            
@stop