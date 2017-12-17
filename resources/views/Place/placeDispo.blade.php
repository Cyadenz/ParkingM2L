@extends('layouts.app')


@section('content')

	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <table class="table">
                        <div class="panel-body">
                            @if($users[0]->CompteValide != 1)
                                    <td>Numéro de la place</td>
                                    <td>Reserver</td>
                                @php
                                    $compteur=0;
                                @endphp
          						@foreach($places as $place)
        							@if($place->reserver != 1)
                                    <tr>
        								<td>{{$place->numplace}}</td>
        								<td>{{$place->reserver}}</td>
                                        <td><a class="btn btn-default" href="{{ route('placeReserve', $place->numplace) }}">Reserver</a></td>
        							</tr>
                                    @else
                                        @php
                                            $compteur++;
                                        @endphp
                                    @endif
        						@endforeach
                                    @if($places->count() == $compteur)
                                        <center><h3>Plus de places disponibles pour le moment</h3></center>
                                    @endif
                            @else
                                <center><h3>Vous avez déjà réserver une place !</h3></center>
                            @endif
                        </div>
				</table>
            </div>
        </div>
    </div>
			
@stop