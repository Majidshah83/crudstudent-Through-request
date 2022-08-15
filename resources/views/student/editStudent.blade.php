<!--Update Modal -->
@extends('student.layout')
@section('content')
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

<div class="modal-body">

<form action="{{route('updateStudent')}}" method="Post">

@csrf
<div class="mb-3">
   <input type="hidden" name="id" value="{{$studentget->id}}"
  <label for="formFile" class="form-label">First Name</label>
  <input class="form-control" type="text" value="{{$studentget->firstname}}" id="formFile" name="firstname" placeholder="First name">
  @error('firstname')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Last Name</label>
  <input class="form-control" type="text" value="{{$studentget->lastname}}" id="formFile" name="lastname" placeholder="Last  name">
  @error('lastname')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Last Name</label>
  <input class="form-control" type="number" value="{{$studentget->age}}" id="formFile" name="age" placeholder="Age">
  @error('age')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
 <form>
  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update </button>
      </div>

</div>


@endsection
