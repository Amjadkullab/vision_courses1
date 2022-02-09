@extends('admin.layouts.master')
@section('content')

<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-12">
<h2 class="mb-4">All Categories</h2>
@if (session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>

@endif

<table class="table">

    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Created At</th>
        <th>Actions</th>
    </tr>
    @foreach ($categories as $category)
    <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
        <td>{{$category->created_at->format('d - m - y')}}</td>
        <td>
            <a class="btn btn-sm btn-primary" href="{{route('categories.edit', $category->id)}}"><i class="fas fa-edit"></i></a>

            <form class="d-inline" action="{{route('categories.destroy', $category->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button onclick=" return confirm('are you sure?')" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
            </form>

        </td>
    </tr>
    @endforeach
</table>
</div>
</div>
</div>






@endsection
