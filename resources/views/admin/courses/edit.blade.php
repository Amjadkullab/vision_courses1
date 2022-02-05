@extends('admin.layouts.master')
@section('content')
@include('admin.layouts.errores')

<div class="container-fluid">
    <div class="rowcol-12">
        <form action="{{route('Courses.update'),$course->id}}" method="post">
      @csrf
      @method('put')
<h1>Updated Course</h1>
<div class="mb-3">
  <input type="text" name="name" class="form-control" placeholder="name" value="{{$course->name}}">
 </div>
<div class="mb-3">
  <input type="text" name="price" class="form-control" placeholder="price" value="{{$course->price}}">
 </div>
<div class="mb-3">
  <input type="text" name="name" class="form-control" placeholder="name" value="{{$course->name}}">
 </div>
 <textarea name="content"rows="10" class="form-control" placeholder="content">{{old('content')}}</textarea>
 <div class="mb-3">
    <div class="mb-3">
        <label>Image</label>
        <input type="file" name="image" class="form-control" placeholder="Image">
        </div>
        <div class="mb-3">

            <select name="category_id" class="form-control" >


            <option value="">Selected Category</option>
            @foreach ($categories as $category )
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach

            </select>
            </div>


        </form>
        <button class="btn btn-warning px-5">Update</button>

    </div>
</div>










@endsection
