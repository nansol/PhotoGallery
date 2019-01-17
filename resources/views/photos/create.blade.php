@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h3>Upload Photo</h3>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{action('PhotossController@store')}}" method="POST" enctype='multipart/form-data'>
                         <?= csrf_field() ?>

                        <div class="form-group">
                            <label for="title"></label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Photo Title">
                        </div>
                        <div class="form-group">
                            <label for="description"> </label>
                            <textarea class="form-control" id="description" name="description"placeholder="Photo Description" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="photo">Choose File</label>
                            <input type="file" class="form-control-file" id="photo" name="photo">
                        </div>
                        <div class="form-group">
                                <label for="album_id"></label>
                        <input type="hidden" class="form-control" id="title" name="album_id" value="{{$album_id}}" placeholder="Photo Title">
                            </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>



@endsection
