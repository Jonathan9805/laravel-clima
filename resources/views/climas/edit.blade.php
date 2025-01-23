@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Clima</h1>
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
    <form action="{{ route('climas.update', $clima->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="ciudad" class="form-label">Ciudad</label>
            <input type="text" class="form-control" id="ciudad" name="ciudad" value="{{ $clima->ciudad }}" required>
        </div>
        @if($clima->comentarios->isNotEmpty())
            <div class="mb-3">
                <label for="comentario" class="form-label">Comentario</label>
                <textarea class="form-control @error('comentario') is-invalid @enderror" name="comentario" id="comentario" required>{{ old('comentario', $clima->comentarios->last()->contenido ?? '') }}</textarea>
                @error('comentario')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        @endif

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('climas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
