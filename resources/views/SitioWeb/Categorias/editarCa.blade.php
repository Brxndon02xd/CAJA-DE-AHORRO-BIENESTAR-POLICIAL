<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('SitioWeb/css/editarCa.css')}}">
    <title>Editar Categoria</title>
</head>
<body>
    <h1>Editar Categoria</h1>
    <form action="/actualizar_Info/{{$editCategoria->id}}" method="post">
        @csrf
        @method('put')

        <label for="nombre">Nombre</label><br>
        <input value="{{$editCategoria->nombreCT}}" type="text" name="nombre" id="nombre"><br>

        <label for="status">Estado</label><br>
        <select name="status" id="status">
            <option value="ACTIVE" {{ $editCategoria->status === 'ACTIVE' ? 'selected' : '' }}>Activo</option>
            <option value="DESACTIVE" {{ $editCategoria->status === 'DESACTIVE' ? 'selected' : '' }}>Desactivado</option>
        </select>

        <hr>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
