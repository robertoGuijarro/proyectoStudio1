<!doctype html>
<html lang="en">
    <head>
		<meta charset="UFT-8">
		<title>listado de usuarios--proyectoStudio</title>
    </head>
    <body>
		<h1> {{ $title }}</h1>


		@if (! empty($users)) 
			<ul>
				@foreach ($users as $user)
					<li> {{ $user }} </li>
				@endforeach
			</ul>
		@else 
			<p>No hay usuarios reguistrados</p>
		@endif
    </body>
</html>