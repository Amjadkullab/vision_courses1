@extends('admin.layouts.master')
@section('content')
@include('admin.layouts.errores')

<div class="container-fluid">
    <div class="rowcol-12">
        <form action="{{route('Categories.store')}}" method="post">
      @csrf

<div class="mb-3">
    <label for="name">Add Categories</label>
<input type="text" name="name" class="form-control" id="name" placeholder="Name">

 </div>
 <button class="btn btn-info px-5">Add</button>

        </form>

    </div>
</div>










@endsection
