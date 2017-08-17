@extends('layout')

@section('content')

    <div class="col-md-12">
        <h1>{{$pageName}}</h1>
    </div>
    <ul>
        @foreach ($albums as $key=>$album)
            <li><a href="{{URL::to('/album')}}/{{$album['AlbumId']}}">{{ $album['Title'] }}</a></li>
        @endforeach
    </ul>

@stop