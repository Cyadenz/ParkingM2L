@extends('layouts.app')


@section('content')

	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <table class="table">
                        <div class="panel-body">
                            @if($ComptesValid != $PlacesReserv)
                                @if($users[0]->CompteValide != 1)
                                    <center><h3>Places disponibles :</h3></center>
                                            <td>Numéro de la place</td>
                                            <td>Reserver</td>
                                        @php
                                            $compteur=0;
                                        @endphp
                  						@foreach($places as $place)
                							@if($place->reserver != 1)
                                            <tr>
                								<td>{{$place->numplace}}</td>
                                                @if($place->reserver == 0)
                								    <td>Non</td>
                                                @else
                                                    <td>Oui</td>
                                                @endif
                                                <td><a class="btn btn-default" href="{{ route('placeReserve', $place->numplace) }}">Reserver</a></td>
                							</tr>
                                            @else
                                                @php
                                                    $compteur++;
                                                @endphp
                                            @endif
                						@endforeach
                                @else
                                    <center><h3>Vous avez déjà réserver une place !</h3></center>
                                @endif
                            @else
                                <td><h4>Les places sont actuellements occupées; Voulez-vous passer en file d'attente ?</h4></td>
                                <td><a class="btn btn-default" href="{{ route('FileDattenteIndex') }}">Passer en liste d'attente</a></td>
                            @endif
                        </div>
				</table>
            </div>
        </div>
    </div>
			
@stop