@csrf

@if ($errors->any())
<div class="danger">
    <strong>Errores:</strong>
    <ul>
        @foreach ($errors->all() as $e)
        <li>{{ $e }}</li>
        @endforeach
    </ul>
</div>
@endif

<div>
    <label for="nombre">Nombre:</label><br>
    <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $aprendiz->nombre ?? '') }}">
</div>

<div>
    <label for="documento">Documento:</label><br>
    <input type="text" name="documento" id="documento" value="{{ old('documento', $aprendiz->documento ?? '') }}">
</div>

<div>
    <label for="correo">Correo:</label><br>
    <input type="email" name="correo" id="correo" value="{{ old('correo', $aprendiz->correo ?? '') }}">
</div>

<div>
    <label for="ficha_id">Ficha ID:</label><br>
    <input type="number" name="ficha_id" id="ficha_id" value="{{ old('ficha_id', $aprendiz->ficha_id ?? '') }}">
</div>

<br>
<button type="submit">Guardar</button>
