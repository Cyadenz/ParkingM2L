@extends('layouts.app')


@section('content')

	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h3><center>Edition champs utilisateurs</center></h3>
                    <form class="form-horizontal" method="POST" action="{{ route('updateMembre', $Membres->id) }}">
                                    {{ csrf_field() }}
                        <table class="table">
                            <div class="panel-body">
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
                                <tr>
                                
                                        <input type="hidden" name="method" value="PUT">
                                        <td>                        
                                            {{$Membres->id}}&emsp;&emsp;&emsp;&emsp;
                                        </td>                                   
                                        <td>                        
                                            <div class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}"> <label for="prenom" class="col-md-10 control-label"></label> <div class="col-md-10"> <input id="prenom" type="prenom" class="form-control" name="prenom" value="{{$Membres->prenom}}" > @if ($errors->has('prenom')) <span class="help-block"> <strong>{{ $errors->first('prenom') }}</strong> </span> @endif </div> </div>
                                        </td>
                                        <td>
                                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}"> <label for="name" class="col-md-10 control-label"></label> <div class="col-md-10"> <input id="name" type="name" class="form-control" name="name" value="{{$Membres->name}}"> @if ($errors->has('name')) <span class="help-block"> <strong>{{ $errors->first('name') }}</strong> </span> @endif </div> </div>
                                        </td>
                                        <td>                        
                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"> <label for="email" class="col-md-10 control-label"></label> <div class="col-md-10"> <input id="email" type="email" class="form-control" name="email" value="{{$Membres->email}}" > @if ($errors->has('email')) <span class="help-block"> <strong>{{ $errors->first('email') }}</strong> </span> @endif </div> </div>
                                        </td>
                                        <td>                        
                                            <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}"> <label for="tel" class="col-md-10 control-label"></label> <div class="col-md-10"> <input id="tel" type="tel" class="form-control" name="tel" value="{{$Membres->tel}}" > @if ($errors->has('tel')) <span class="help-block"> <strong>{{ $errors->first('tel') }}</strong> </span> @endif </div> </div>
                                        </td>
                                        <td>                        
                                            {{$Membres->admin}}
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="col-md-1 col-md-offset-1">
                                                    <button type="submit" class="btn btn-default" value="Submit Button">
                                                        Modifier
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </form>        
                            </tr>
                        </div>
				</table>
            </div>
        </div>
    </div>

@endsection