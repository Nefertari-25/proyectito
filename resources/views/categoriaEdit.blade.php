<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <h1>Editar suministros</h1>
{{-- post que nos lleva al path de edicion --}}
		<form method="POST" action="/categoria/{{$categoria->id}}" id="formulario">
			@csrf
			@method('patch')

			<div class="">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" id="nombre" value="{{$categoria->nombre}}"/>
			</div>
			<div class="">
				<label for="precio">Precio</label>
				<input type="text" name="precio" id="precio" value="{{$categoria->precio}}">
			</div>
            <div class="">
				<label for="tipo">Tipo</label>
				<input type="text" name="tipo" id="tipo" value="{{$categoria->tipo}}">
			</div>
            <div class="">
				<label for="nomComerciante">Nombre del comerciante</label>
				<input type="text" name="nomComerciante" id="nomComerciante" value="{{$categoria->nomComerciante}}">
			</div>
			<input type="submit"  class="btn center" name="action" value="enviar">
		</form>
</body>
</html>