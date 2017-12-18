@extends('layouts.app')


@section('content')

	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h3><center>Edition champs utilisateurs SUITE</center></h3>

                <table class="table">
                        <div class="panel-body">
                            <div style="text-align: right;">
                                <a align="right" href="{{ url('membres') }}">Retour arrière</a>
                            <div>
                    		<td>Id</td>
                    		<td>Prénom</td>
                    		<td>Nom</td>
                    		<td>Email</td> 
                    		<td>Téléphone</td>
                    		<td>Admin</td>
    							<tr>
    								<td>{{$Membres->id}}</td>
    								<td>{{$Membres->prenom}}</td>
    								<td>{{$Membres->name}}</td>
    								<td>{{$Membres->email}}</td>
    								<td>0{{$Membres->tel}}</td>
    								<td>{{$Membres->admin}}</td>
    							</tr>
                        </div>
				</table>
            </div>
        </div>
    </div>

@stop