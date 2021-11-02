@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-4 mb-4">Dettaglio {{ $comic['title'] }}</h1>
                <img src="{{ $comic['thumb'] }}" alt="">
                <ul>
                    <li>{{ $comic['type'] }}</li>
                    <li>{!! $comic['description'] !!}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection