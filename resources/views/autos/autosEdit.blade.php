<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Autos</title>
</head>
<body>
    <h1>Editar auto</h1>
    <form action="/autos/{{$auto->id}}" method="post">
        @csrf 
        @method('patch')
        <label for="nombre">Nombre</label>
        <input type='text' name="nombre" id="nombre"value="{{old('nombre')?? $auto->nombre}}">
        <br>
        <label for="fecha">Fecha</label>
        <input type='date' name="fecha" id="fecha">
        <br>
        <label for="resguardador">Resguardador</label>
        <input type='text' name="resguardador" id="resguardador">
        <br>
        <label for="modelo">Modelo</label>
        <input type='number' name="modelo" id="modelo">
        <br>
        <label for="telefono">Telefono</Tabel>
        <input type='text' name="telefono" Td="telefono">
        <br>
        <input type ='submit' value="Guardar">
    </form>
</body>
</html>