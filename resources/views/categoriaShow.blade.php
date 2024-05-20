<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar producto categoria</title>
</head>
<body>
    <table>
        <h1>Producto especifico</h1>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Tipo</th>
                    <th>Nombre del Comerciante</th>
                </tr>
            </thead>
        </table>
        <tbody>
            <tr>
                <td>{{$categoria->id}}</td>
                <td>{{$categoria->nombre}}</td>
                <td>{{$categoria->precio}}</td>
                <td>{{$categoria->tipo}}</td>
                <td>{{$categoria->nomComerciante}}</td>
                <a href="/categoria/{{$categoria->id}}/edit">Modificar</a>
                <form method="POST" action="/categoria/{{$categoria->id}}" id="formulario">
                    @csrf
                    @method('DELETE')		
                    <input type="submit"  name="action" value="Eliminar">
                </form>
            </tr>
        </tbody>
    </table>
</body>
</html>