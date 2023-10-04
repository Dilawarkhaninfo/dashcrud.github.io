@extends('layout')

@section('content')

<main>
    <div class="container-fluid px-4">
        <h2 class="mt-4">Add New Category</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Add New Category</li>
        </ol>
        <div class="card shadow mb-3 p-3">
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{route('category.store')}}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="name" class="mb-2">Category Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Category here....">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</main>

@endsection
