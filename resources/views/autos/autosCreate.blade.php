<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Autos</title>
</head>
<body>
    <h1>Introducir Auto</h1>
   
    <form action="/autos" method="post">
        @csrf 
        <label for="nombre">Nombre</label>
        <input type='text' name="nombre" id="nombre">
        @error('nombre')
		<i>{{$message}}</i>
		@enderror
        <br>
        <label for="fecha">Fecha</label>
        <input type='date' name="fecha" id="fecha">
        @error('fecha')
		<i>{{$message}}</i>
		@enderror
        <br>
        <label for="resguardador">Resguardador</label>
        <input type='text' name="resguardador" id="resguardador">
        @error('resguardador')
		<i>{{$message}}</i>
		@enderror
        <br>
        <label for="modelo">Modelo</label>
        <input type='number' name="modelo" id="modelo">
        @error('modelo')
		<i>{{$message}}</i>
		@enderror
        <br>
        <label for="telefono">Telefono</Tabel>
        <input type='text' name="telefono" Td="telefono">
        @error('telefono')
		<i>{{$message}}</i>
		@enderror
        <br>
        <label for="especificaciones">Especificaciones</Tabel>
        <input type='text' name="especificaciones" id="especificaciones">
        @error('especificaciones')
		<i>{{$message}}</i>
		@enderror
        <br>
        <input type ='submit' value="Guardar">
    </form>
</body>
</html>