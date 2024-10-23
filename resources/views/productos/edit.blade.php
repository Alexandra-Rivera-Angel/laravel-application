@extends('layout')
@section("content")
<h1>Editar producto</h1>
<form action="{{ Route("productos.update", $producto->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <div class="input-fields">
        <label for="nombre">Titulo:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $producto->nombre }}" required>
    </div>
    <br>

    <div class="input-fields">
        <label for="precio">Precio:</label>
        <input type="text" id="precio" name="precio" value="{{ $producto->precio }}" required>
    </div>
    <br>

    <div class="input-fields">
        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock" value="{{ $producto->stock }}" required>
    </div>
    <br>

    <div class="input-fields">
        <label for="descripcion">Descripcion</label>
        <input type="text" id="descripcion" name="descripcion" value="{{ $producto->descripcion }}" required>
    </div>
    <br>

    <div class="input-fields">
        <label for="imagen">Imagen:</label>
        <input type="file" name="imagen" id="imagen" value="{{ $producto->imagen }}" required>
    </div>

    <button type="submit" class="button-style">Enviar</button>
</form>
@endsections