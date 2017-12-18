@extends('layouts.app')


@section('content')

	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h3><center>Listes d'attentes</center></h3>

                <table class="table">
                        <div class="panel-body">
                            <div style="text-align: right;">
                                <a align="right" href="{{ url('Administration') }}">Retour arrière</a>
                            <div>
                    		<td>Prénom</td>
                    		<td>Nom</td>
                            <td>Position sur la liste d'attente</td>
                            @foreach($users as $user)
    							<tr>
                                    @if(! is_null($user->rang) )
        								<td>{{$user->prenom}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->rang}}</td>

                                        <td><a class="btn btn-default" href="{{ route('ListeId', $user->id) }}">Editer</a></td>

                                        <td><a class="btn btn-default" href="{{ route('SupAttente', $user->id) }}">Supprimer</a></td>
                                    @endif
    							</tr>
                            @endforeach
                        </div>
				</table>
            </div>
        </div>
    </div>
			
@stop