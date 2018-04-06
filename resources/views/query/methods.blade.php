@extends('layout')
	@section('content')
	<div class="container">
		
		<h1 class="page-header">
				{{$title}}		</h1>
		<table class="table table-hover table-striped ">
			
			<thead>
				<tr>
					@include('partials.head-list-users')
				</tr>
			</thead>
			<tbody>
				@include('partials.list-users')
			</tbody>
		</table>
	</div>
	@endsection()