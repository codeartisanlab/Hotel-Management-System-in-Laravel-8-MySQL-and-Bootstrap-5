@extends('frontlayout')
@section('content')
<div class="container my-4">
	<h3 class="mb-3">Contact Us</h3>
	@if(Session::has('success'))
	<p class="text-success">{{session('success')}}</p>
	@endif
	<form method="post" action="{{url('customer/save-testimonial')}}">
		@csrf
		<table class="table table-bordered">
			<tr>
				<th>Full Name</th>
				<td><input type="text" name="full_name" class="form-control" /></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><input type="email" name="email" class="form-control" /></td>
			</tr>
			<tr>
				<th>Subject</th>
				<td><input type="text" name="subject" class="form-control" /></td>
			</tr>
			<tr>
				<th>Message<span class="text-danger">*</span></th>
				<td><textarea name="msg" class="form-control" rows="8"></textarea></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" class="btn btn-primary" /></td>
			</tr>
		</table>
	</form>
</div>
@endsection