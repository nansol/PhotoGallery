@extends('layouts.app')
@section('content')
<h1>{{$album->name}}</h1>
<a class="btn btn-secondary" href="/">Back</a>
<a class="btn btn-primary" href="/photos/create/{{$album->id}}">Add Photo To Album</a>
<hr>
@if(count($album->photos) > 0)
    <?php
        $colcount = count($album->photos);
        $i = 1;
    ?>
    <div id="photos">
        <div class="row">
            @foreach($album->photos as $photo)
            @if($i == $colcount)
            <div class="col-4">
                <a href="/photo/{{$photo->id}}">
                    <img class="img-thumbnail" src="/storage/photo/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
                </a>
                <br>
                <h4>{{$photo->title}}</h4>
            </div>
            @else
            <div class="col-4">
                <a href="/photo/{{$photo->id}}">
                    <img class="img-thumbnail" src="/storage/photo/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
                </a>
                <br>
                <h4>{{$photo->title}}</h4>
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
    <p>No Photo To Display</p>
  @endif

@endsection
