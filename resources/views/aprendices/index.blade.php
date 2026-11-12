@extends('layouts.app')
@section('title','Aprendices')
@section('content')
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 mb-6">
    <h1 class="text-2xl font-bold text-gray-900">Aprendices</h1>
    <a href="{{ route('aprendices.create') }}"
       class="inline-flex items-center justify-center px-4 py-2 rounded-md bg-indigo-600 text-sm font-semibold text-white hover:bg-indigo-500">
        + Nuevo
    </a>
</div>

<form method="GET" action="{{ route('aprendices.index') }}" class="flex flex-wrap gap-2 mb-4">
    <input type="text" name="q" value="{{ $q ?? '' }}" placeholder="Buscar por nombre o documento"
           class="flex-1 min-w-[220px] rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm">
    <button type="submit" class="px-4 py-2 rounded-md bg-gray-800 text-sm font-medium text-white hover:bg-gray-700">Buscar</button>
    @if(!empty($q))
        <a href="{{ route('aprendices.index') }}" class="px-4 py-2 rounded-md border border-gray-300 bg-white text-sm text-gray-700 hover:bg-gray-50">Limpiar</a>
    @endif
</form>

<div class="bg-white shadow-sm rounded-xl overflow-hidden">
    <div class="overflow-x-auto">
        <table class="min-w-full text-sm">
            <thead class="bg-gray-50 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">
                <tr>
                    <th class="px-4 py-3">ID</th>
                    <th class="px-4 py-3">Nombre</th>
                    <th class="px-4 py-3">Documento</th>
                    <th class="px-4 py-3">Correo</th>
                    <th class="px-4 py-3">Ficha</th>
                    <th class="px-4 py-3 text-right">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($aprendices as $a)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3 text-gray-500">{{ $a->id }}</td>
                    <td class="px-4 py-3 font-medium text-gray-900">{{ $a->nombre }}</td>
                    <td class="px-4 py-3">{{ $a->documento }}</td>
                    <td class="px-4 py-3">{{ $a->correo }}</td>
                    <td class="px-4 py-3">{{ $a->ficha_id ?? '—' }}</td>
                    <td class="px-4 py-3">
                        <div class="flex items-center justify-end gap-2">
                            <a href="{{ route('aprendices.edit', $a) }}"
                               class="px-3 py-1 rounded-md border border-indigo-200 text-indigo-600 hover:bg-indigo-50">Editar</a>
                            <form action="{{ route('aprendices.destroy', $a) }}"
                                  method="POST"
                                  onsubmit="return confirm('¿Eliminar?')">
                                @csrf
                                @method('DELETE')
                                <button class="px-3 py-1 rounded-md border border-red-200 text-red-600 hover:bg-red-50">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="px-4 py-10 text-center text-gray-500">No hay aprendices registrados.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<div class="mt-4">
    {{ $aprendices->links() }}
</div>
@endsection
