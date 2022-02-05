@extends('admin.layouts.master')
@section('content')
@include('admin.layouts.errores')

<div class="container-fluid">
    <div class="rowcol-12">
        <form action="{{route('Categories.update',$category->id)}}" method="post">
      @csrf
      @method('put')

<div class="mb-3">
    <label for="name">Update Categories</label>
<input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{$category->name}}">

 </div>
 <button class="btn btn-warning px-5">Update</button>

        </form>

    </div>
</div>










@endsection
