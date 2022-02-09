@extends('admin.layouts.master')
@section('content')


<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-12">
 <h2 class="mb-4">Add New Courses</h2>
 @include('admin.layouts.errores')
 <form action="{{route('courses.store')}}" method="post" enctype="multipart/form-data">
@csrf
<div class="mb-3">
<input type="text" name="name" class="form-control"  placeholder="Name" value="{{old('name')}}" >
</div>
<div class="mb-3">
<input type="text" name="price" class="form-control"  placeholder="Price" value="{{old('price')}}">
</div>

<textarea name="content" rows="7" class="form-control" placeholder="content">{{old('content')}}</textarea>
<div class="mb-3">
<label>Image</label>
<input type="file" name="image" class="form-control" >
</div>


<div class="mb-3">

<select name="category_id" class="form-control" >


<option value="" selected disabled>Selected Category</option>
@foreach ($categories as $category )
<option value="{{$category->id}}">{{$category->name}}</option>
@endforeach

</select>
</div>
<button class="btn btn-info px-5">Add</button>
</form>
</div>
</div>
</div>
@endsection
