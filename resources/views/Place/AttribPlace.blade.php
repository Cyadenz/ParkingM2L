@extends('layouts.app')


@section('content')

	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h3><center>Attribution de la date</center></h3>
                    <form class="form-horizontal" method="POST" action="{{ route('updatePlace', $uti[0]->id) }}">
                        {{ csrf_field() }}
                        <table class="table">
                            <div class="panel-body">
                                <div style="text-align: right;">
                                    <a align="right" href="{{ url('EditPlace') }}">Retour arrière</a>
                                <div>
                                <td>Nom</td>
                                <td>Prénom</td>
                                <td>Date début</td>
                                <td>Date fin</td>
                                <td>Numéro de la place</td>
                                <td>Validé par l'admin ?</td>
                                <td></td>
                                <tr>
                                        <input type="hidden" name="method" value="PUT">
                                        <td>                        
                                            {{$uti[0]->name}}&emsp;&emsp;&emsp;&emsp;
                                        </td>                                   
                                        <td>                        
                                            {{$uti[0]->prenom}}
                                        </td>
                                        <td>
                                            <div class="form-group{{ $errors->has('debutperiode') ? ' has-error' : '' }}"> <label for="debutperiode" class="col-md-10 control-label"></label> <div class="col-md-6"> <input id="debutperiode" type="debutperiode" class="form-control" name="debutperiode" value="{{$uti[0]->debutperiode}}"> @if ($errors->has('debutperiode')) <span class="help-block"> <strong>{{ $errors->first('debutperiode') }}</strong> </span> @endif </div> </div>
                                        </td>
                                        <td>                        
                                            <div class="form-group{{ $errors->has('finperiode') ? ' has-error' : '' }}"> <label for="finperiode" class="col-md-10 control-label"></label> <div class="col-md-6"> <input id="finperiode" type="finperiode" class="form-control" name="finperiode" value="{{$uti[0]->finperiode}}" > @if ($errors->has('finperiode')) <span class="help-block"> <strong>{{ $errors->first('finperiode') }}</strong> </span> @endif </div> </div>
                                        </td>
                                        <td>                        
                                            {{$uti[0]->id_place}}
                                        </td>
                                        <td>                        
                                            {{$uti[0]->valider}}
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