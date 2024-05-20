<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear categoria</title>
</head>
<body>
    <h1>Ingredientes de tu cafeteria </h1>
    <h2>Escribe el nombre del producto</h2>
    <form action="/categoria" method="POST" id="formulario">
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
            <label for="tipo">Tipo</label>
            <input type="text" name="tipo" id="tipo">
        </div>
        <div>
            <label for="nomComerciante">Nombre del comerciante</label>
            <input type="text" name="nomComerciante" id="nomComerciante">
        </div>
        <input type="submit" name="action" value="Enviar">
    </form>
</body>
</html>
