@extends('layouts.app')


@section('content')

	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h3><center>Utilisateurs</center></h3>

                <table class="table">
                        <div class="panel-body">
                    		<td>Id</td>
                    		<td>Prénom</td>
                    		<td>Nom</td>
                    		<td>Email</td> 
                    		<td>Téléphone</td>
                    		<td>Admin</td>
      						@foreach($Membres as $users)
    							<tr>
    								<td>{{$users->id}}</td>
    								<td>{{$users->prenom}}</td>
    								<td>{{$users->name}}</td>
    								<td>{{$users->email}}</td>
    								<td>0{{$users->tel}}</td>
    								<td>{{$users->admin}}</td>

                                    <td><a class="btn btn-primary" href="{{ route('index', $users) }}">Editer</a></td>

                                    <td><a class="btn btn-primary" href="{{ route('index', $users) }}">Supprimer</a></td>
    							</tr>
    						@endforeach
                        </div>
				</table>
            </div>
        </div>
    </div>
			

@stop