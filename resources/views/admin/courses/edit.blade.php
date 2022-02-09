@extends('admin.layouts.master')
@section('content')


<div class="container-fluid">
    <div class="row justify-content-center">
<div class="col-12">
<h2 class="mb-4">Updated Course</h2>
@include('admin.layouts.errores')
<form action="{{route('courses.update',$course->id)}}" method="post" enctype="multipart/form-data">
@csrf
@method('put')

<div class="mb-3">
  <input type="text" name="name" class="form-control" placeholder="name" value="{{old('name',$course->name)}}">
 </div>
<div class="mb-3">
  <input type="text" name="price" class="form-control" placeholder="price" value="{{old('price' ,$course->price)}}">
 </div>
 <div class="mb-3">
 <textarea name="content"rows="7" class="form-control" placeholder="content">{{old('content',$course->content)}}</textarea>
 </div>

<div class="mb-3">
        <label>Image</label>
        <input type="file" name="image" class="form-control" >
        <img width="100" class="mt-1" src="{{asset('uploads/' . $course->image)}}" alt="">
        </div>


<div class="mb-3">

<select name="category_id" class="form-control" >
            <option value="" selected disabled>Select Category</option>
            @foreach ($categories as $category )
            <option value="{{$category->id}}" {{$course->category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
            @endforeach

        </select>
  </div>
 <button class="btn btn-warning px-5">Update</button>
</form>


    </div>
      </div>
          </div>










@endsection
