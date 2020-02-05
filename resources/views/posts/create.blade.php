@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Create Post
        </div>

        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" name="title" id="title">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" cols="5" rows="5" id="description"></textarea>
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" name="content" cols="5" rows="10" id="content"></textarea>
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input class="form-control" type="file" name="image" id="image">
                </div>

                <div class="form-group">
                    <button class="btn btn-success" type="submit">Create Post</button>
                </div>
            </form>
        </div>
    </div>
@endsection