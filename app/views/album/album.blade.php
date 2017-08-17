@extends('layout')

@section('content')

    <div class="col-md-12">
        <h1>{{$pageName}}</h1>
        <h3>Artist: {{$albumArtist}}</h3>
    </div>

    <ul>
        @foreach ($tracks as $key=>$track)
            <li><a href="{{URL::to('/track')}}/{{$track['TrackId']}}">{{ $track['Name'] }}</a></li>
        @endforeach
    </ul>

@stop