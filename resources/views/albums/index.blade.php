@extends('layouts.app')

@section('content')
    @if(count($albums) > 0)
        <?php
            $colcount = count($albums);
            $i = 1;
        ?>
        <div id="albums">
            <div class="row">
                @foreach($albums as $album)
                @if($i == $colcount)
                <div class="col-4">
                    <a href="/albums/{{$album->id}}">
                        <img class="img-thumbnail" src="storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}">
                        </a>
                        <br>
                        <h4>{{$album->name}}</h4>
                </div>
                @else
                <div class="col-4">
                    <a href="/albums/{{$album->id}}">
                        <img class="img-thumbnail" src="storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}">
                        </a>
                        <br>
                        <h4>{{$album->name}}</h4>
                </div>
                @endif
                @if($i % 3 == 0)
                <div class="row text-center">
                @else
                </div>
                @endif
        	    <?php $i++; ?>
                @endforeach
            </div>
        </div>



  @else
    <p>No Albums To Display</p>
  @endif

@endsection
