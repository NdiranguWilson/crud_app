@extends('app')

@section('content')
    {!! Form::open() !!}
    <div class="container">


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
                {!! Form::label('Mailing address') !!}
                {!! Form::text('mailing', null,
                    array(
                          'class'=>'form-control',
                          'placeholder'=>'P.O BOX ..')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Mobile Number') !!}
                {!! Form::text('phone_number', null,
                    array(
                          'class'=>'form-control',
                          'placeholder'=>'+254..*')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('Inquiry subject') !!}
                {!! Form::text('subject', null,
                    array('required',
                          'class'=>'form-control',
                          'placeholder'=>'Subject*')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Your Message') !!}
                {!! Form::textarea('message', null,
                    array('required',
                          'class'=>'form-control',
                          'placeholder'=>'Your message *')) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Contact Us!',
                  array('class'=>'btn btn-primary')) !!}
            </div>
        </div>
    </div>

    {!! Form::close() !!}

@endsection
