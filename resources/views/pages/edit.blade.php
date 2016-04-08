@extends('master')

@section('content')

    {!! Form::model($comment,['url'=>'/updatecomment/' .$comment->phone_number]) !!}
    <div class="container">

{!! Form::text('message', null, [ ]) !!}

            <div class="form-group">
                {!! Form::submit('edit comment!',
                  array('class'=>'btn btn-primary')) !!}
            </div>
        </div>
    </div>

    {!! Form::close() !!}

@endsection