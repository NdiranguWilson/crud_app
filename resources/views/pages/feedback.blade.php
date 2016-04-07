@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-12 why_us_small">
            @foreach ($results as $result)
                <p class="blocktext">
                    {{$result->subject}}.  {{$result->message}}.
                </p>
            @endforeach

        </div>

    </div>
@endsection