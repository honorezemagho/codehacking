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
        <td>Hopital</td>
        <th>Téléphone</th>
        <th>Date de Création</th>
        <th> Dernière Modification</th>
    </tr>
    </thead>

    <tbody>
    @if($ambulances)

        @foreach($ambulances as $ambulance)

            <tr>
                <td>{{$ambulance->id}}</td>
                <td>{{$ambulance->name}}</td>
                <td>{{$ambulance->ville->name}}</td>
                <td>{{$ambulance->quartier->name}}</td>
                <td>{{$ambulance->hopital->name}}</td>
                <td>{{$ambulance->phone}}</td>
                <td>{{$ambulance->created_at->diffForhumans()}}</td>
                <td>{{$ambulance->updated_at->diffForhumans()}}</td>
            </tr>

        @endforeach
    @endif

    </tbody>
</table>

@endsection