@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Create Category</div>

        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" id="name">
                </div>

                <div class="form-group">
                    <button class="btn btn-success" type="submit">Add Category</button>
                </div>
            </form>
        </div>
    </div>
@endsection