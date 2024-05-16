<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    {{-- @vite(['resources/css/app.css',]) --}}
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
                <th>Marca</th>
                <th>Tipo</th>
                <th>Ver</th>
            </tr>
        </thead>
    </table>
    <tbody>
        @foreach ($cafes as $pr)
        <tr>
            <td>{{$pr->id}}</td>
            <td>{{$pr->Nombre}}</td>
            <td>{{$pr->Marca}}</td>
            <td>{{$pr->Tipo}}</td>
            <td>
                @foreach ($cafeteria->categorias as $categoria)
                    {{$categoria->categoria}} <br>
                @endforeach
            </td>
            <!-- <td><a href="/cafeteria/"></a></td> -->
        </tr>
        <pre></pre>
        @endforeach
    </tbody>
    <a href="http://proyecto.test/cafeteria/create">Agregar nuevos productos</a>
</body>
</html>