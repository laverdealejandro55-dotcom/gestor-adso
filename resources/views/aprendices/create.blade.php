@extends('layouts.app')
@section('title','Nuevo Aprendiz')
@section('content')
<div class="max-w-xl mx-auto">
    <h1 class="text-2xl font-bold text-gray-900 mb-6">Nuevo Aprendiz</h1>
    <form action="{{ route('aprendices.store') }}" method="POST" class="bg-white shadow-sm rounded-xl p-6">
        @include('aprendices._form', ['aprendiz' => $aprendiz])
    </form>
</div>
@endsection
