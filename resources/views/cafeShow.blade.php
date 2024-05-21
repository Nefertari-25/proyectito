<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto especifico</title>
    @vite(['resources/css/estilos.css']) 
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
                <th>Ingredientes</th>
                <th>Eliminar</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$cafeteria->id}}</td>
                <td>{{$cafeteria->Nombre}}</td>
                <td>{{$cafeteria->Precio}}</td>
                <td>{{$cafeteria->Descripcion}}</td>
                <td>
                    @foreach ($cafeteria->categoria as $categoria)
                        <h5>{{$categoria->nombre}}</h5>
                    @endforeach
                </td>
                <td class="eliminar">
                    <form method="POST" action="/cafeteria/{{$cafeteria->id}}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" name="action" value="Eliminar">
                    </form>
                </td>
                <td class="editar">
                    <a href="/cafeteria/{{$cafeteria->id}}/edit">Modificar</a>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>