@extends('app')

@section('content')

    {!! Form::open(['route'=>'reset']) !!}
    <div class="container">


        <div class="col-md-6">
            <p> reset password</p>
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
            {!! Form::label('Your password') !!}
            {!! Form::password('passwordr', null,
                array('required',
                      'class'=>'form-control',
                      'placeholder'=>'')) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('delete comment!',
              array('class'=>'btn btn-primary')) !!}
        </div>
    </div>
    </div>

    {!! Form::close() !!}

@endsection