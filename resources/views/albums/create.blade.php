@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h3>Create Album</h3>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{action('AlbumsController@store')}}" method="POST" enctype='multipart/form-data'>
                         <?= csrf_field() ?>

                        <div class="form-group">
                            <label for="name"></label>
                            <input type="text" class="form-control" id="Name" name="name" placeholder="Album Name">
                        </div>
                        <div class="form-group">
                            <label for="description"> </label>
                            <textarea class="form-control" id="description" name="description"placeholder="Album Description" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="cover_image">Choose File</label>
                            <input type="file" class="form-control-file" id="cover_image" name="cover_image">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>



@endsection
