@extends('layout')
	@section('content')
		<div clas="container">
			<p class="alert alert-success">
				El usuario se elimino exitosamente

				<a href="{{route('home')}}"> Regresar a Home</a>
			</p>
		</div>
	@endsection()