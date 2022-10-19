<x-plantilla>
    <h1>Listado de Autos</h1>

    <a href="/autos/create">Introducir Nuevo Auto</a>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Resguardador</th>
            <th>Modelo</th>
            <th>Telefono</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    
        @foreach ($autos as $auto)
        <tr>
            <td>
                <a href="/autos/{{$auto->id}}">
                {{$auto ->nombre}}
            </a>
            </td>
            <td>{{$auto ->fecha}}</td>
            <td>{{$auto ->resguardador}}</td>
            <td>{{$auto ->modelo}}</td>
            <td>{{$auto ->telefono}}</td>
            <td>
                <a href="/autos/{{$auto->id}}/edit">Editar</a>
            </td>
            <td>
                <form action="/autos/{{$auto->id}}"method="post">
                    @csrf
                    @method("DELETE")
                    <input type="submit"value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach
        </table>
</x-plantilla>