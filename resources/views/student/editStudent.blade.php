<!--Update Modal -->@extends('student.layout') @section('content')
<div class="pull-left text-center">
	<h3>Laravel CRUD Operation </h3> </div>
<div class="modal-body" style="  border: 1px solid;">
	<form action="{{route('updateStudent')}}" method="Post"> @csrf
		<div class="mb-3">
			<input type="hidden" name="id" value="{{$studentget->id}}" <label for="formFile" class="form-label">First Name</label>
			<input class="form-control" type="text" value="{{$studentget->firstname}}" id="formFile" name="firstname" placeholder="First name"> @error('firstname')
			<div class="alert alert-danger">{{ $message }}</div> @enderror </div>
		<div class="mb-3">
			<label for="formFile" class="form-label">Last Name</label>
			<input class="form-control" type="text" value="{{$studentget->lastname}}" id="formFile" name="lastname" placeholder="Last  name"> @error('lastname')
			<div class="alert alert-danger">{{ $message }}</div> @enderror </div>
		<div class="mb-3">
			<label for="formFile" class="form-label">Last Name</label>
			<input class="form-control" type="number" value="{{$studentget->age}}" id="formFile" name="age" placeholder="Age"> @error('age')
			<div class="alert alert-danger">{{ $message }}</div> @enderror </div>
		<form>
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
	<button type="submit" class="btn btn-primary">Update </button>
</div>
</div>
@endsection
