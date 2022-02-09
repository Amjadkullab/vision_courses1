@extends('admin.layouts.master')
@section('content')
<h1>All Courses</h1>
@if (session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>

@endif

<table class="table">

<tr>
<th>ID</th>
<th>Name</th>
<th>Price</th>
<th>Content</th>
<th>image</th>
<th>Category</th>
<th>Created at</th>
<th>Actions</th>
</tr>
@foreach ($courses as $course )
<tr>

<td>{{$course->id}}</td>
<td>{{$course->name}}</td>
<td>{{$course->price}}</td>
<td>{{$course->content}}</td>
<td><img width="100" src="{{asset('uploads/' .  $course->image)}}" alt=""></td>
<td>{{$course->Category_id }}</td>
<td>{{$course->created_at->format('d - m - y')}}</td>
<td>
<a class="btn btn-sm btn-primary" href="{{route('courses.edit',$course->id)}}"><i class="fas fa-edit"></i></a>
<form class="d-inline" action="{{route('courses.destroy',$course->id)}}" method="POST">
@csrf
@method('DELETE')
<button onclick="return confirm('are you sure?')" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>


</form>



</td>




</tr>

@endforeach





</table>
{{$courses->links()}}









@endsection
