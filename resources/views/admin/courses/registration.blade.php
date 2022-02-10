@extends('admin.layouts.master')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
     <h2 class="mb-4">All Registrations</h2>
     <table class="table" >
<tr>
   <th>ID</th>
   <th>Student Name</th>
   <th>Course Name</th>
   <th>Status</th>
   <th>Register At</th>
   <th>Actions</th>
</tr>
@foreach ($data as $record )
<tr>

    <td>{{$record->id}}</td>
    <td>{{$record->user->name}}</td>
    <td>{{$record->course->name}}</td>
    <td>{!! $record->status ? '<span class="badge badge-success">Completed</span>': '<span class="badge badge-warning">Not completed</span>'!!}</td>
    <td>
        <form class="d-inline" action="{{route('register.destroy',$record->id)}}" method="post">
@csrf
@method('DELETE')
<button onclick="return confirm('are you sure?')" class="btn btn-sm btn-danger" ><i class="fas fa-times"></i></button>





        </form>
    </td>
</tr>

@endforeach

     </table>
{{$data->links()}}














        </div>
    </div>
</div>

@endsection
