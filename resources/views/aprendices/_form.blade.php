@csrf

@if ($errors->any())
<div class="mb-5 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800">
    <strong>Errores:</strong>
    <ul class="mt-1 list-disc list-inside">
        @foreach ($errors->all() as $e)
        <li>{{ $e }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="space-y-5">
    <div>
        <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $aprendiz->nombre ?? '') }}"
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <div>
        <label for="documento" class="block text-sm font-medium text-gray-700">Documento</label>
        <input type="text" name="documento" id="documento" value="{{ old('documento', $aprendiz->documento ?? '') }}"
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <div>
        <label for="correo" class="block text-sm font-medium text-gray-700">Correo</label>
        <input type="email" name="correo" id="correo" value="{{ old('correo', $aprendiz->correo ?? '') }}"
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <div>
        <label for="ficha_id" class="block text-sm font-medium text-gray-700">Ficha ID <span class="text-gray-400">(opcional)</span></label>
        <input type="number" name="ficha_id" id="ficha_id" value="{{ old('ficha_id', $aprendiz->ficha_id ?? '') }}"
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>
</div>

<div class="mt-6 flex items-center gap-3">
    <button type="submit" class="px-4 py-2 rounded-md bg-indigo-600 text-sm font-semibold text-white hover:bg-indigo-500">Guardar</button>
    <a href="{{ route('aprendices.index') }}" class="px-4 py-2 rounded-md border border-gray-300 text-sm text-gray-700 hover:bg-gray-50">Cancelar</a>
</div>
