@extends('layouts.app')


@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h3><center>liste d'attente</center></h3>
                    <table class="table">
                            <div class="panel-body">
                            <div style="text-align: right;">
                                <a align="right" href="{{ url('welcome') }}">Retour arrière</a>
                            <div>
                                <td>
                                    <center>Votre rang dans la liste d'attente est le : 
                                    @foreach($users as $user)
                                        {{ $user->rang }} 
                                    @endforeach
                                    </center>
                                </td>
                            </div>
                    </table>
            </div>
        </div>
    </div>
            
@stop