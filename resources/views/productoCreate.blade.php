<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE</title>
</head>
<body>
    <h1>Productos de tu cafeteria </h1>
    <h2>Escribe el nombre del producto</h2>
    <form action="/cafeteria" method="POST" id="formulario">
        @csrf {{--seguridad dentro del formulario--}}
        <div>
            <label for="Nombre">Inserta nombre</label>
            <input type="text" name="nombre" id="nombre">
        </div>
        <div>
             <label for="Precio">Inserta el precio</label>
             <input type="float" name="precio" id="precio">
        </div>
        <div>
            <label for="Descripcion">Inserta su descripcion</label>
            <input type="text" name="descripcion" id="descripcion">
        </div>
        <input type="submit" name="action" value="Enviar">
    </form>
</body>
</html>
