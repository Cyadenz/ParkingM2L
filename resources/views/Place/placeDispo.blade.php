@extends('layouts.app')


@section('content')

	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <table class="table">
                        <div class="panel-body">
                            <div style="text-align: right;">
                                <a align="right" href="{{ url('Reservation') }}">Retour arrière</a>
                            <div>
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
                                @if($users[0]->CompteValide != 1)
                                    <div><br /><br />
                                    <td><h4>Les places sont actuellements occupées,&emsp;&emsp;&emsp;&emsp;
                                        <span style="text-decoration: underline;">Voulez-vous passer en file d'attente ?</span>
                                        <br /><br /></h4></td>
                                    <td><a class="btn btn-default" href="{{ route('FileDattenteIndex') }}">Passer en liste d'attente</a></td>
                                    </div>
                                @else
                                    <center><h3>Vous avez déjà réserver une place !</h3></center>
                                @endif
                            @endif
                        </div>
				</table>
            </div>
        </div>
    </div>
			
@stop