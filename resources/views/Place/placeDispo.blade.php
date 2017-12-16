@extends('layouts.app')


@section('content')

	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h3><center>Places disponibles</center></h3>

                <table class="table">
                        <div class="panel-body">
                    		<td>Id Place</td>
                            <td>Numéro de la place</td>
                            <td>Reserver</td>
      						@foreach($places as $place)
    							<tr>
    								<td>{{$place->idplace}}</td>
    								<td>{{$place->numplace}}</td>
    								<td>{{$place->reserver}}</td>

                                    <td><a class="btn btn-primary" href="{{ route('place') }}">Reserver</a></td>
    							</tr>
    						@endforeach
                        </div>
				</table>
            </div>
        </div>
    </div>
			
@stop