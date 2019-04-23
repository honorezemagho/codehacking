@extends('adminlte::page')

@section('content')


    @if(Session::has('deleted_user'))

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <p class="bg-danger" data-toggle="modal" data-target=".bd-example-modal-lg"> {{session('deleted_user')}}</p>

                </div>
            </div>
        </div>


    @endif

    <h1>  Edit Users </h1>

    <div class="row">

        <div class="col-sm-3">

            <img src="{{$user->photo ? $user->photo->file: '/images/default.jpg'}}" alt="" class="img-responsive img-rounded">

        </div>

        <div class="col-sm-9">

        {!! Form::model($user, ['method' =>'PATCH', 'action' => ['AdminUsersController@update', $user->id], 'files'=>true]) !!}

        <div class = "form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>


        <div class = "form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>


        <div class = "form-group">
            {!! Form::label('role_id', 'Role:') !!}
            {!! Form::select('role_id',  $roles , null, ['class' => 'form-control']) !!}
        </div>


        <div class = "form-group">
            {!! Form::label('is_active', 'Status:') !!}
            {!! Form::select('is_active', array(1 => 'Active', 0=> 'Not Active' ), null, ['class' => 'form-control']) !!}
        </div>


        <div class = "form-group">
            {!! Form::label('photo_id', 'Photo') !!}
            {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
        </div>


        <div class = "form-group">
            {!! Form::label('password', 'Password: ') !!}
            {!! Form::password('password', null, ['class' => 'form-control']) !!}
        </div>



        <div class = "form-group">
            {!! Form::Submit ('Update User', ['class' => 'btn btn-primary btn-group mr-2'] ) !!}


        {!! Form::close() !!}



            {!! Form::open(['method' => 'DELETE', 'action' => ['AdminUsersController@destroy', $user->id], 'class'=>'btn-group mr-2']) !!}


                {!! Form::Submit ('Delete User', ['class' => 'btn btn-danger ' ], ['data-toggle' => 'modal'],['data-target' => '.bd-example-modal-lg']  ) !!}
             </div>

              {!! Form::close() !!}




        </div>
    </div>


<div class="row">
    @include('includes.form_error')

</div>

@endsection