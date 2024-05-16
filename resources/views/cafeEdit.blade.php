<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
	<h1>Modificacion del producto</h1>
{{-- post que nos lleva al path de edicion --}}
		<form method="POST" action="/cafeteria/{{$cafeteria->id}}" id="formulario">
			@csrf
			@method('patch')

			<div class="">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" id="nombre" value="{{$cafeteria->Nombre}}"/>
			</div>
            <div class="">
				<label for="precio">Precio</label>
				<input type="text" name="precio" id="precio" value="{{$cafeteria->Precio}}">
			</div>
			<div class="">
				<label for="descripcion">Descripcion</label>
				<input type="text" name="descripcion" id="descripcion" value="{{$cafeteria->Descripcion}}">
			</div>
			

			
			
			<input type="submit"  class="btn center" name="action" value="enviar">
		</form>
</body>
</html>