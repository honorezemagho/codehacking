 @extends('adminlte::page');
@section('content');

<h1 class="text-center">Create Posts</h1>

<div class="row">

    <div class="col-sm-3">

            <img src="{{$post->photo ? $post->photo->file: '/images/default.jpg'}}" alt="" class="img-responsive img-rounded">

    </div>


    <div class="col-sm-9">

    {!! Form::open(['method' =>'PATCH','action' => ['AdminPostsController@update', $post->id], 'files' => true]) !!}

    <div class = "form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>


    <div class = "form-group">
        {!! Form::label('category_id', 'Category:') !!}
        {!! Form::select('category_id', $categories, null,['class' => 'form-control']) !!}
    </div>

    <div class = "form-group">
        {!! Form::label('photo_id', 'Photo') !!}
        {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
    </div>

    <div class = "form-group">
        {!! Form::label('body', 'Description:') !!}
        {!! Form::textarea('body',null,['class' => 'form-control']) !!}
    </div>


    <div class = "form-group">
        {!! Form::Submit ('Update Post', ['class' => 'btn btn-primary col-sm-2'] ) !!}
    </div>

        {!! Form::close() !!}



        {!! Form::open(['method' => 'DELETE', 'action' => ['AdminPostsController@destroy', $post->id]]) !!}

<div class="form-group">
        {!! Form::Submit (' Delete Post', ['class' => 'btn btn-danger col-sm-2'] ) !!}
</div>

    </div>

        {!! Form::close() !!}

</div>

<div class="row">

    @include('includes.form_error')

</div>




@endsection