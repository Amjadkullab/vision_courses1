@extends('admin.layouts.master')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-centre">
    <div class="col-12">
         <h2 class="mb-4">Update Categories</h2>
        @include('admin.layouts.errores')

        <form action="{{route('categories.update', $category->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <input type="text" name="name" class="form-control"  placeholder="Name" value="{{$category->name}}">
            </div>
            <button class="btn btn-warning px-5">Update</button>
        </form>

    </div>
     </div>
       </div>

@endsection
