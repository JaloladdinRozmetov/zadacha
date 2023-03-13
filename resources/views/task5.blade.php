@extends('app.layout')

@section('content')
    <div class="container">

    <ul class="breadcrumbs">
        @foreach($breadcrumbs as $breadcrumb)
            @if($loop->last)
                <li>{{$breadcrumb['name']}}</li>
            @else
                <li>
                    <a href="{{route('task5',['element_id'=>$breadcrumb['id']])}}">
                        {{$breadcrumb['name']}} ->
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
    <br>
        <div class="catalog-menu">
    <ul>
    @foreach($categories as $category)
        <li>
        <a href="{{route('task5',['element_id'=>$category['id']])}}">
            {{$category['id']}}.{{$category['name']}}</a><br>
        </li>
    @endforeach
    </ul>
        </div>
    </div>

@endsection
