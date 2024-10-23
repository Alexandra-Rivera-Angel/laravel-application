@extends("layout")
@section("content")
<h1>Listado de productos</h1>
<a href="{{ route("productos.create") }}" class="button-style">Crear Post</a>

@if($message = Session::get("success"))
    <p>{{ $message }}</p>
@endif

<br>
<table>
    <tr>
        <th>Nombre del producto</th>
        <th>Descripcion</th>
        <th>Imagen</th>
        <th>Ver producto</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    @foreach($productos as $producto)
        <tr>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->descripcion }}</td>
            <td><img src="{{ Storage::url(path: $producto->imagen) }}" alt="{{ $producto->nombre }}">
            </td>
            <td> <a href="{{ route('productos.show', parameters: $producto->id) }}">Ver producto</a>

            </td>
            <td> <a href="{{ route('productos.edit', $producto->id) }}">Editar</a>
            </td>
            <td>
                <form action="{{ route("productos.destroy", $producto->id) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="button-style eliminar">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>


@endsection