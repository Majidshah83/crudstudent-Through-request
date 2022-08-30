@extends('student.layout') @section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left text-center">
			<h3>Laravel CRUD Operation </h3> </div>
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Create </button>
	</div>
</div> @if(session()->has('message'))
<div class="alert alert-success" id="successMessage"> {{ session()->get('message') }} </div> @endif
<table class="table table-bordered">
	<tr>
		<th>No</th>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Age</th>
		<th>Action</th>
	</tr> @foreach ($students as $student)
	<tr>
		<td>{{$loop->iteration}}</td>
		<td>{{$student->firstname}}</td>
		<td>{{$student->lastname}}</td>
		<td>{{$student->age}}</td>
		<td> <a class="btn btn-primary" href="{{route('editStudent',$student->id)}}">Edit</a> <a class="btn btn-danger" href="{{route('deleteStudent',$student->id)}}">Delete</a> </td>
	</tr> @endforeach </table> {{-- {!! $students->links() !!} --}} @endsection
<!--Insert  Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="{{route('store')}}" method="Post"> @csrf
					<div class="mb-3">
						<label for="formFile" class="form-label">First Name</label>
						<input class="form-control" type="text" value="{{old('firstname')}}" id="formFile" required name="firstname" placeholder="First name"> @error('firstname')
						<div class="alert alert-danger">{{ $message }}</div> @enderror </div>
					<div class="mb-3">
						<label for="formFile" class="form-label">Last Name</label>
						<input class="form-control" type="text" value="{{old('lastname')}}" required id="formFile" name="lastname" placeholder="Last  name"> @error('lastname')
						<div class="alert alert-danger">{{ $message }}</div> @enderror </div>
					<div class="mb-3">
						<label for="formFile" class="form-label">Last Name</label>
						<input class="form-control" type="number" value="{{old('age')}}" required id="formFile" name="age" placeholder="Age"> @error('age')
						<div class="alert alert-danger">{{ $message }}</div> @enderror </div>
					<form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<script>
setTimeout(function() {
	$('#successMessage').fadeOut('slow');
}, 5000);
</script>
