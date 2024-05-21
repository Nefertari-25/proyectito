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
				<input type="text" name="Nombre" id="Nombre" value="{{$cafeteria->Nombre}}"/>
			</div>
            <div class="">
				<label for="precio">Precio</label>
				<input type="text" name="Precio" id="Precio" value="{{$cafeteria->Precio}}">
			</div>
			<div class="">
				<label for="descripcion">Descripcion</label>
				<input type="text" name="Descripcion" id="Descripcion" value="{{$cafeteria->Descripcion}}">
			</div>
			<div class="">
				<label for="categoria">Categorías</label>
				<select name="insumos[]" id="insumos" multiple>
					@foreach($categoria as $categoria)
						<option value="{{ $categoria->id }}"
							@if($cafeteria->categoria->contains($categoria->id)) selected @endif>
							{{ $categoria->nombre }}
						</option>
					@endforeach
				</select>
			</div>
			<div>
				<input type="submit"  class="btn center" name="action" value="enviar">
			</div>			
		</form>
</body>
</html>