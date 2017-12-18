@extends('layouts.app')


@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h3><center>Administration</center></h3>
                    <table class="table">
                            <div style="text-align: right;" class="panel-body">
                                <a align="right" href="{{ url('welcome') }}">Retour arrière</a>
                                <td>
                                    <ul>
                                        <li><a href="{{ route('index') }}">Gestion utilisateur</a></li>
                                        <li><a href="{{ route('placeAdmin') }}">Gestion places</a></li>
                                        <li><a href="{{ route('ListeAttAdmin') }}">Gestion liste attentes</a></li>
                                    </ul>
                                </td>
                            </div>
                    </table>
            </div>
        </div>
    </div>
            
@stop