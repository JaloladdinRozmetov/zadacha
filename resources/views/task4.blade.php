@extends('app.layout')

@section('content')
    <div class="container">
        <h3>
        все значения:
        @foreach($numbers as $item)
            {{$item}},
        @endforeach
    </h3>
    <h3>3 максимальных значения: {{$numbers[0]}},{{$numbers[1]}} , {{$numbers[2]}}</h3>
    <br>
    <button onclick="location.reload()">Повторит</button>
    </div>

@endsection
