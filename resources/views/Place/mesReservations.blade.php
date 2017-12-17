@extends('layouts.app')


@section('content')

	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h3><center>Mes Réservations</center></h3>

                <table class="table">
                        <div class="panel-body">
                            <td>Numéro de la place</td>
                            <td>Reservé par :</td>
                            <td>Valider par l'administrateur ?</td>
                            <td>Date de Debut</td>
                            <td>Date de Fin</td>
                            @foreach($join as $place)
        							<tr>
        								<td>{{$place->id_place}}</td>
        								<td>{{$place->name}} {{$place->prenom}}</td>
                                        @if($place->valider == 1)
                                            <td>Oui</td>
                                            <td>{{$place->debutperiode}}</td>
                                            <td>{{$place->finperiode}}</td>
                                        @else
                                            <td>Non</td>
                                            <td>En attente de validation...</td>
                                            <td>En attente de validation...</td>
                                        @endif
        							</tr>
                            @endforeach
                        </div>
				</table>
            </div>
        </div>
    </div>
			
@stop