@extends('adminlte::page');

@section('content')


    @if(Session::has('deleted_user'))

        <p class="bg-danger"> {{session('deleted_user')}}</p>

    @endif

    <h1 style="text-align: center">Quartiers</h1>

    <table class="table">
        <thead>
        <tr>
            <th> Id</th>
            <th> Nom </th>
            <th>Ville</th>
            <th> Date de Creation </th>
            <th> Dernière Modification </th>
        </tr>
        </thead>

        <tbody>
        @if($quartiers)

            @foreach($quartiers as $quartier)
                <tr>
                    <td> {{$quartier->id}} </td>
                    <td> {{$quartier->name}}</td>
                    <td> {{$quartier->ville->name}} </td>
                    <td> {{$quartier->created_at->diffForHumans()}}</td>
                    <td> {{$quartier->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach
        @endif


        </tbody>
    </table>
    @endsection

