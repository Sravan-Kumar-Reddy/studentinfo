@extends('layouts.app')

@section('content')
	<h1>Add a new Course</h1>
	
	<form action="/courses" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="form-group">
			<div>
				<label for="course" >course Name:</label>
				<input type="text" name="course" placeholder="Course Name" class="form-control">
			</div>
			<div>
				<label for="code" >Course Code:</label>
				<input type="text" name="code" placeholder="Course code" class="form-control">
			</div><br>
			<div>
				<button type="submit" class="btn btn-primary">Add Course</button>		
			</div>		
		

		</div>	
	</form>
@endsection