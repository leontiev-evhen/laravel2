@extends('layout')

@section('content')

    <div class="col-md-12">
        <h1>{{$pageName}}</h1>
    </div>
    <ul>
        <li><b>Album:</b> {{ $albumName }}</li>
        <li><b>Artist:</b> {{ $artistName }}</li>
        <li><b>MediaType:</b> {{ $mediaTypeName }}</li>
        <li><b>Genre:</b> {{ $genreName }}</li>
        <li><b>Composer:</b> {{ $track->Composer }}</li>
        <li><b>Milliseconds:</b> {{ $track->Milliseconds }}</li>
        <li><b>Bytes:</b> {{ $track->Bytes }}</li>
        <li><b>UnitPrice:</b> {{ $track->UnitPrice }}</li>
    </ul>

@stop