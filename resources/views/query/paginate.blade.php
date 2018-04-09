@extends('layout')
@section('content')
	<div class="container">
		<h1 class="page-header">
			{{$title}}
		</h1>
		<p>
			{{$users->total()}} Registros |
			P&aacute;gina {{ $users->currentPage()}} de{{$users->lastPage()}}
		</p>
		<table class="table talbe-hover table-striped">
			@include('partials.list-users')
			<tbody>
				@include('partials.list-users')
			</tbody>
		</table>
		{!!$users->render();!!}
	</div>
@endsection