@extends('layouts.app')

@section('content')
    <h1>Editar Aprendiz</h1>
    <form action="{{ route('aprendices.update', $aprendiz) }}" method="POST">
        @csrf
        @method('PUT')
        @include('aprendices._form', ['aprendiz' => $aprendiz])
    </form>
@endsection