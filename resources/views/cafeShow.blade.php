<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto especifico</title>
</head>
<body>
<table>
    <h1>Producto especifico</h1>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripcion</th>
            </tr>
        </thead>
    </table>
    <tbody>
        <tr>
            <td>{{$cafeteria->id}}</td>
            <td>{{$cafeteria->Nombre}}</td>
            <td>{{$cafeteria->Precio}}</td>
            <td>{{$cafeteria->Descripcion}}</td>
            <a href="/cafeteria/{{$cafeteria->id}}/edit">Modificar</a>
            <form method="POST" action="/cafeteria/{{$cafeteria->id}}">
                @csrf
                @method('DELETE')
                <input type="submit" name="action" value="Eliminar">
            </form>
        </tr>
    </tbody>
        
</body>
</html>