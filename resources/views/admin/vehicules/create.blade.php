@extends('adminlte::page')

@extends('adminlte::page');
@section('content')
    <h1 style="text-align: center">  Ajouter un Véhicule </h1>

    {!! Form::open(['method' =>'POST', 'action' => 'AdminVehiculesController@store']) !!}

    <div class = "form-group">
        {!! Form::label('name', 'Nom') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>


    <div class = "form-group">
        {!! Form::label('user_id', 'Propriétaire :') !!}
        {!! Form::select('user_id', [null => 'Veuillez choisir le propriétaire du véhicule'] + $user , null, ['class' => 'form-control']) !!}
    </div>

    <div class = "form-group">
        {!! Form::label('quartier_id', 'Quartier :') !!}
        {!! Form::select('quartier_id', [null => 'Veuillez choisir un Quartier'] + $quartiers , null, ['class' => 'form-control']) !!}
    </div>

    <div class = "form-group">
        {!! Form::Submit ('Créer', ['class' => 'btn btn-primary'] ) !!}
    </div>

    {!! Form::close() !!}

    @include('includes.form_error')

@endsection