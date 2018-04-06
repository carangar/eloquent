@extends('layout')
	@section('content')
		<div class="jumbotron">
			<div class="container">
				<h1 class="page-header">
					Detalles del usuario {{$user->name}}
				</h1>
			</div>
		</div>
			<div class="container">
				<label>email: {{$user->email}}</label>
				<br/>
				<label>
					Genero: 
					@if($user->gender='f')
						Femenino
						@else
						Masculino
						@endif
				</label>
				<br/>
				<label>Descripcion <br/> {{$user->description}}</label>
				<br/>
			</div>
					
	
	@endsection()