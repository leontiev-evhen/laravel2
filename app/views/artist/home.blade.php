@extends('layout')

@section('content')

    <div class="col-md-12">
        <h1>{{$pageName}}</h1>
    </div>
    <ul>
        @foreach ($artists as $key=>$artist)
            <li><a href="{{URL::to('/artist')}}/{{$artist['ArtistId']}}">{{ $artist['Name'] }}</a></li>
        @endforeach
    </ul>

@stop