@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Clima</h1>
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('climas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="ciudad" class="form-label">Ciudad</label>
            <input type="text" class="form-control" id="ciudad" name="ciudad" value="{{ old('ciudad') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('climas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
