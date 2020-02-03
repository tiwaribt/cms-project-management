@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Create Category</div>

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

            <form action="{{ route('categories.store') }}" method="post">
                @csrf
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