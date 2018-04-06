<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>practica con el orm de eloquent</title>
	
	<!-- Latest compiled and minified CSS -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style>
       body{
        margin-top: 50px;
       }
    </style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<a href="{{ route('home')}}" class="navbar-brand">Eloquent ORM</a>
			<ul class="nav navbar-nav">
				<li>
					<a href="{{ route('home')}}">Home</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						Consultas Eloquent
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="{{route('methods')}}">
								Todos los usuarios (ALL)
							</a>
						</li>
						<li>
							<a href="{{route('getByGender','f')}}">
								Todos de usuarios (Femeninos)
							</a>
						<li>
							<a href="{{route('getByGender','m')}}">
								Todos de usuarios (Masculino)
							</a>
						</li>						
						</li>						
					</ul>
				</li>
			</ul>
		</div>
	</nav>

		
		@yield('content')



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>	 
</body>
</html>