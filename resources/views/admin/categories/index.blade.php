@extends('admin.layouts.master')
@section('content')
<h1>All Categories</h1>
@if (session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>

@endif

<table class="table">

<tr>
<th>ID</th>
<th>Name</th>
<th>Created at</th>
<th>Actions</th>
</tr>
@foreach ($category as $category )
<tr>

<td>{{$category->id}}</td>
<td>{{$category->name}}</td>
<td>{{$category->created_at->format('d-m-y')}}</td>
<td>
<a class="btn btn-sm btn-primary" href="{{route('Categories.edit',$category->id)}}"><i class="fas fa-edit"></i></a>
<form class="d-inline" action="{{route('Categories.destroy',$category->id)}}" method="POST">
@csrf
@method('DELETE')
<button onclick="return confirm('are you sure?')" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>


</form>



</td>




</tr>

@endforeach





</table>









@endsection
