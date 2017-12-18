@extends('layouts.app')


@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <table class="table">
                    <h3><center>Tableau des réservations</center></h3>
                        <div class="panel-body">
                                <div style="text-align: right;">
                                    <a align="right" href="{{ url('Administration') }}">Retour arrière</a>
                                <div>
                                <td>Nom</td>
                                <td>Prénom</td>
                                <td>Date début</td>
                                <td>Date fin</td>
                                <td>Numéro de la place</td>
                                <td>Validé par l'administrateur ?</td>
                            @foreach($join as $uti)
                                    <tr>
                                        <td>{{$uti->name}}</td>
                                        <td>{{$uti->prenom}}</td>  

                                        @if($uti->debutperiode == '2015-12-12' && $uti->finperiode == '2015-12-12')
                                            <td>En attente d'une validation...</td>
                                            <td>En attente d'une validation...</td>
                                        @else
                                            <td>{{$uti->debutperiode}}</td>
                                            <td>{{$uti->finperiode}}</td>
                                        @endif

                                        <td>{{$uti->id_place}}</td>
                                        @if($uti->valider == 1)
                                            <td>Oui</td>
                                        @else
                                            <td>Non</td>
                                        @endif  
                                        <td><a class="btn btn-default" href="{{ route('SupPlace', $uti->id_place) }}">Supprimer</a></td>
                                        <td><a class="btn btn-default" href="{{ route('attribPlace', $uti->id_place) }}">Attribuer</a></td>
                                   </tr>
                            @endforeach
                        </div>
                </table>
            </div>
        </div>
    </div>
            
@stop