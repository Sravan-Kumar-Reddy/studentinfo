@extends('layouts.app')

@section('content')
	<h1>Add New Instructor</h1>
	
	<form action="/instructors" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="form-group">
			<div>
				<label for="firstname" >First Name:</label>
				<input type="text" name="firstname" placeholder="First Name" class="form-control">
			</div>
			<div>
				<label for="lastname" >Last Name:</label>
				<input type="text" name="lastname" placeholder="Last Name" class="form-control">
			</div><br>
			<div>
				<label for="email" >Email:</label>
				<input type="email" name="email" placeholder="Email" class="form-control">
			</div><br>
			<div>
				<button type="submit" class="btn btn-primary">Add Instructor</button>	
			</div>		
		

		</div>	
	</form>
@endsection