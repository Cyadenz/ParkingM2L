@extends('layouts.app')


@section('content')

	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h3><center>Place Réservée !</center></h3>

                <table class="table">
                        <div class="panel-body">
                            <div style="text-align: right;">
                                <a align="right" href="{{ url('mesReservations') }}">Retour arrière</a>
                            <div>
                            <td>Numéro de la place</td>
                            <td>Reserver</td>
                            <td>Reservé par</td>
    							<tr>
    								<td>{{$place[0]->numplace}}</td>
    								@if($place[0]->reserver == 0)
                                            <td>Non</td>
                                        @else
                                            <td>Oui</td>
                                        @endif
                                    <td>{{Auth::user()->name}} {{ Auth::user()->prenom}}</td>
    							</tr>
                        </div>
				</table>
            </div>
        </div>
    </div>
			
@stop