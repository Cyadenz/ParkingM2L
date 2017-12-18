@extends('layouts.app')


@section('content')

	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h3><center>Modification du rang de la liste d'attente</center></h3>
                <form class="form-horizontal" method="POST" action="{{ route('updateListe', $user[0]->id) }}">
                        {{ csrf_field() }}
                    <table class="table">
                            <div class="panel-body">
                                <div style="text-align: right;">
                                    <a align="right" href="{{ url('ListesAttentes') }}">Retour arrière</a>
                                <div>
                        		<td>Prénom</td>
                        		<td>Nom</td>
                                <td>Position sur la liste d'attente</td>
                                <td></td>
        							<tr>
            								<td>{{$user[0]->prenom}}</td>
                                            <td>{{$user[0]->name}}</td>
                                            <td>
                                                <div class="form-group{{ $errors->has('rang') ? ' has-error' : '' }}"> <label for="rang" class="col-md-10 control-label"></label> <div class="col-md-3"> <input id="rang" type="rang" class="form-control" name="rang" value="{{$user[0]->rang}}"> @if ($errors->has('rang')) <span class="help-block"> <strong>{{ $errors->first('rang') }}</strong> </span> @endif </div> </div>
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
        							</tr>
                            </div>
    				</table>
                </form>
            </div>
        </div>
    </div>
			
@stop