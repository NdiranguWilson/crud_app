@extends('app')

@section('content')
    {!! Form::open((['route' => 'register'])) !!}
    <div class="col-md-6">
    <div class="form-group">
        {!! Form::label('Your Name') !!}
        {!! Form::text('name', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Your name*')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Your E-mail Address') !!}
        {!! Form::text('email', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Your e-mail address *')) !!}
    </div>
        <div class="form-group">
            {!! Form::label('Your password') !!}
            {!! Form::password('pass', null,
                array('required',
                      'class'=>'form-control',
                      'placeholder'=>'Your e-mail address *')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Repeat  password') !!}
            {!! Form::password('repeatpass', null,
                array('required',
                      'class'=>'form-control',
                      'placeholder'=>'Your e-mail address *')) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Register!',
              array('class'=>'btn btn-primary')) !!}
        </div>



    </div>
@endsection
