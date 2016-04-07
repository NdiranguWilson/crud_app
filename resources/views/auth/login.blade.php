@extends('app')

@section('content')
    {!! Form::open(['route'=>'login']) !!}
    <div class="container">


        <div class="col-md-6">



            <div class="form-group">
                {!! Form::label('Your E-mail Address') !!}
                {!! Form::text('email', null,
                    array('required',
                          'class'=>'form-control',
                          'placeholder'=>'Your e-mail address *')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Your password') !!}
                {!! Form::password('password', null,
                    array('required',
                          'class'=>'form-control',
                          'placeholder'=>'')) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Login!',
                  array('class'=>'btn btn-primary')) !!}
            </div>
        </div>
    </div>

    {!! Form::close() !!}

@endsection
