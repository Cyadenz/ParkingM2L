@extends('layouts.app')


@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h3><center>Liste d'attente</center></h3>
                    <table class="table">
                            <div class="panel-body">
                            <div style="text-align: right;">
                                <a align="right" href="{{ url('Reservation') }}">Retour arrière</a>
                            <div>
                                <td>
                                    <ul>
                                            @if( is_null($users[0]->rang) )
                                               <center><h4>Vous n'êtes pas sur liste d'attente !</h4></center>
                                            @else
                                                <center><h4>Votre position sur la liste d'attente est : {{$users[0]->rang}}</h4></center>
                                            @endif
                                    </ul>
                                </td>
                            </div>
                    </table>
            </div>
        </div>
    </div>
            
@stop