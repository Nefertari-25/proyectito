<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    @vite(['resources/css/estilos.css']) 
</head>
<body>
    @if (session()->has('success'))
        <p>Se borro exitosamente</p>
    @endif
    <h1>Productos</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripcion</th>
                <th>Ver</th>
            </tr>
        </thead>
    </table>
    <tbody>
        @foreach ($cafes as $pr)
        <tr>
            <td>{{$pr->id}}</td>
            <td>{{$pr->Nombre}}</td>
            <td>{{$pr->Precio}}</td>
            <td>{{$pr->Descripcion}}</td>
            <td><a href="/cafeteria/{{$pr->id}}">Ir</a></td>
            <form method="POST" action="/cafeteria/{{$pr->id}}">
                @csrf
                @method('DELETE')
                <input type="submit" name="action" value="Eliminar">
            </form>
        </tr>
        <pre></pre>
        @endforeach
    </tbody>
    <a href="http://proyecto.test/cafeteria/create">Agregar nuevos productos</a>
</body>
</html>