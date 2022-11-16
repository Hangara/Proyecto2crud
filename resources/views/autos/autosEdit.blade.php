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
        <input type='date' name="fecha" id="fecha"value="{{old('fecha')?? $auto->fecha}}">
        <br>
        <label for="resguardador">Resguardador</label>
        <input type='text' name="resguardador" id="resguardador"value="{{old('resguardador')?? $auto->resguardador}}">
        <br>
        <label for="modelo">Modelo</label>
        <input type='number' name="modelo" id="modelo"value="{{old('modelo')?? $auto->modelo}}">
        <br>
        <label for="telefono">Telefono</Tabel>
        <input type='text' name="telefono" id="telefono"value="{{old('telefono')?? $auto->telefono}}">
        <br>
        <label for="especificaciones">Especificaciones</Tabel>
        <input type='text' name="especificaciones" id="especificaciones"value="{{old('especificaciones')?? $auto->especificaciones}}">
        <br>
        <input type ='submit' value="Guardar">
    </form>
</body>
</html>