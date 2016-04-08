@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-12 why_us_small">
            @foreach ($results as $result)
                <p class="blocktext">
                    {{$result->subject}}.  {{$result->message}}.
                    <a href="{{URL::to('updatecomment',array($result->phone_number))}}"><button>update</button></a>
                    <a href="{{URL::to('deletecomment',array($result->phone_number))}}"><button>delete</button></a>


                </p>
            @endforeach

        </div>

    </div>
@endsection