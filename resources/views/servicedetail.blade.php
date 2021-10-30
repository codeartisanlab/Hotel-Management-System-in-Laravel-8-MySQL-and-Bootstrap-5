@extends('frontlayout')
@section('content')
<div class="container my-4">
	<h3 class="mb-3">{{$service->title}}</h3>
	<p>{{$service->detail_desc}}</p>
</div>
@endsection