<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria Inicio</title>
    @vite(['resources/css/app.css',])
</head>
<body>
    @if (session()->has('success'))
        <p>Se borro exitosamente</p>
    @endif
    <h1>Insumos</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Tipo</th>
                <th>Nombre del comerciante</th>
                <th>Ver</th>
            </tr>
        </thead>
    </table>
    <tbody>
        @foreach ($categoria as $pr)
        <tr>
            <td>{{$pr->id}}</td>
            <td>{{$pr->nombre}}</td>
            <td>{{$pr->precio}}</td>
            <td>{{$pr->tipo}}</td>
            <td>{{$pr->nomComerciante}}</td>
            <td><a href="/categoria/{{$pr->id}}">Ver producto </a></td>
        </tr>
        <pre></pre>
        @endforeach
    </tbody>
    <a href="/categoria/create">Crear nuevo producto para inventario</a>
</body>
</html>