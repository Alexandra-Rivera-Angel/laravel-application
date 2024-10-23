@extends("layout")

@section("content")
<img src="{{ Storage::url($producto->imagen)}}" alt="imagen" style="width:50%; height:50%">
<h1>Nombre: {{ $producto->nombre }}</h1>
<p>Precio: {{ $producto->precio }}</p>
<p>Cantidad en stock: {{ $producto->stock }}</p>
<p>Descripcion: {{ $producto->descripcion }}</p>
<br>
<br>
<a href="{{ Route("productos.index") }}">
    << Regresar</a>
        @endsection