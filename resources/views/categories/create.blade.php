@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            {{ isset($category) ? 'Edit Category' : 'Create Category' }}
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

            <form action="{{ isset($category) ? route('categories.update', $category->id) : route('categories.store') }}" method="post">
                @csrf
                @if (isset($category))
                    @method('put')
                @endif
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{ isset($category) ? $category->name : '' }}">
                </div>

                <div class="form-group">
                    <button class="btn btn-success" type="submit">{{ isset($category) ? 'Update Category' : 'Add Category' }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection