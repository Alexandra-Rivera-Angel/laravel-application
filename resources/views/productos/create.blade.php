@extends('layout')
@section("content")
<h1>Añadir producto</h1>
<form action="{{ Route("productos.store") }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="input-fields">
        <label for="nombre">Titulo:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Ej...Pasta de dientes, sopa de caracol" required>
    </div>
    <br>

    <div class="input-fields">
        <label for="precio">Precio:</label>
        <input type="text" id="precio" name="precio" placeholder="Ej.2.95" required>
    </div>
    <br>

    <div class="input-fields">
        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock" placeholder="Ej.9" required>
    </div>
    <br>

    <div class="input-fields">
        <label for="descripcion">Descripcion</label>
        <input type="text" id="descripcion" name="descripcion" placeholder="Ej.Este es un nuevo producto" required>
    </div>
    <br>

    <div class="input-fields">
        <label for="imagen">Imagen:</label>
        <input type="file" name="imagen" id="imagen" required>
    </div>
    <br>


    <button type="submit" class="button-style">Enviar</button>
</form>
@endsection