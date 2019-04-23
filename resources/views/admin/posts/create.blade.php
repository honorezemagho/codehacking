 @extends('adminlte::page');
 @include('layouts.tinyeditor');
@section('content')

<h1 class="text-center">Créer un Post</h1>

<div class="row"> 
{!! Form::open(['method' =>'POST','action' => 'AdminPostsController@store', 'files' => true]) !!}

<div class = "form-group">
    {!! Form::label('title', 'Titre') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
 </div>


<div class = "form-group">
 {!! Form::label('category_id', 'Catégorie:') !!}
 {!! Form::select('category_id', array([null => 'Choose Options'] + $categories), null,['class' => 'form-control']) !!}
</div>

<div class = "form-group">
    {!! Form::label('photo_id', 'Uploader une photo') !!}
    {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
</div>

<div class = "form-group">
 {!! Form::label('body', 'Description:') !!}
 {!! Form::textarea('body',null,['class' => 'form-control']) !!}
</div>

 <div class = "form-group">
    {!! Form::Submit ('Create Post', ['class' => 'btn btn-primary'] ) !!}
 </div>

  {!! Form::close() !!}
</div>

  <div class="row">

  @include('includes.form_error')
  </div>

@endsection