<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar producto categoria</title>
</head>
<body>
    <h1>{{$categoria->nombre}}</h1>
		<h3>{{$categoria->precio}}</h3>

		<a href="/categoria/{{$categoria->id}}/edit">Modificar</a>

		<form method="POST" action="/categoria/{{$categoria->id}}" id="formulario">
			@csrf
			@method('DELETE')		
			<input type="submit"  name="action" value="Eliminar">
		</form>
		
</body>
</html>