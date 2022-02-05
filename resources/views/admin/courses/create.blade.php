@extends('admin.layouts.master')
@section('content')
@include('admin.layouts.errores')

<div class="container-fluid">
    <div class="rowcol-12">
 <h1>Aadd Courses</h1>
 <form action="{{route('Courses.store')}}" method="post" enctype="multipart/form-data">
@csrf
<div class="mb-3">
<input type="text" name="name" class="form-control"  placeholder="Name">
</div>
<div class="mb-3">
<input type="text" name="price" class="form-control"  placeholder="Price" value="{{old('price')}}">
</div>

<textarea name="content"rows="10" class="form-control" placeholder="content">{{old('content')}}</textarea>
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
<button class="btn btn-info px-5">Add</button>
</form>
</div>
</div>
@endsection
