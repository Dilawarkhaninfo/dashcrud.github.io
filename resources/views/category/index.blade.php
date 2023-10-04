@extends('layout')

@section('content')

<main>
    <div class="container-fluid px-4">
        <h2 class="mt-4">All Categories</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">All Categories</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <a href="{{route('category.create')}}" class="btn btn-primary">Add New Category</a>
            </div>
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
            @endif
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Sr no.</th>
                            <th>Category Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Sr no.</th>
                            <th>Category Name</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>
                                <a href="{{route('category.edit',$category->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{route('category.delete',$category->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

@endsection
