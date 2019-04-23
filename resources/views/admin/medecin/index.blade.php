@extends('adminlte::page');

@section('content');

<h1 class="text-center"> Ambulances </h1>

<table class = "table">

    <thead>
    <tr>
        <th> Id</th>
        <th> Nom</th>
        <th> Ville</th>
        <th> Quartier</th>
        <th>Téléphone</th>
        <th>Date de Création</th>
        <th> Dernière Modification</th>
    </tr>
    </thead>

    <tbody>
    @if($medecins)

        @foreach($medecins as $medecin)

            <tr>
                <td>{{$medecin->id}}</td>
                <td>{{$medecin->name}}</td>
                <td>{{$medecin->quartier->ville->name}}</td>
                <td>{{$medecin->quartier->name}}</td>
                <td>{{$medecin->phone}}</td>
                <td>{{$medecin->created_at->diffForhumans()}}</td>
                <td>{{$medecin->updated_at->diffForhumans()}}</td>
            </tr>

        @endforeach
    @endif

    </tbody>
</table>

@endsection