@extends('master')

@section('content')

    {!! Form::open(['route'=>'edit']) !!}
    <div class="container">


        <div class="col-md-6">
            <p> Delete a  message associated with a particular phone number</p>

            <div class="form-group">
                {!! Form::label('Mobile Number') !!}
                {!! Form::text('phone_number', null,
                    array(
                          'class'=>'form-control',
                          'placeholder'=>'+254..*')) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('delete comment!',
                  array('class'=>'btn btn-primary')) !!}
            </div>
        </div>
    </div>

    {!! Form::close() !!}

@endsection