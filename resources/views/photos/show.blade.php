@extends('layouts.app')

@section('content')
<h3>{{$photo->title}}</h3>
<p>{{$photo->description}}</p>
<a class="btn btn-link" href="/albums/{{$photo->album_id}}">Back To Gallerry</a>
<hr>
<img src="/storage/photo/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
<div class="col-2 mt-5">
        <form action="{{action('PhotossController@destroy', [$photo->id])}}" method="POST">
             <?= csrf_field() ?>
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection
