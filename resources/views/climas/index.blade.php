@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Lista de Climas</h1>
    <hr>
    <a href="{{ route('climas.create') }}" class="btn btn-primary">Agregar Clima</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Ciudad</th>
                <th>Temperatura</th>
                <th>Máxima</th>
                <th>Mínima</th>
                <th>Humedad</th>
                <th>Comentario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($climas as $clima)
                <tr>
                    <td>{{ $clima->ciudad }}</td>
                    <td>{{ $clima->temperatura }} °C / {{ $clima->temperatura_fahrenheit }} °F</td>
                    <td>{{ $clima->temperatura_max }} °C</td>
                    <td>{{ $clima->temperatura_min }} °C</td>
                    <td>{{ $clima->humedad }}%</td>
                    <td>
                        @if($clima->comentarios->isNotEmpty())
                            {{ $clima->comentarios->last()->contenido }}
                        @else
                            Sin comentarios
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('climas.edit', $clima->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('climas.destroy', $clima->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Eliminar</button>
                        </form>

                        @if($clima->comentarios->isEmpty())
                            <div class="mt-2">
                                <form action="{{ route('comentarios.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="clima_id" value="{{ $clima->id }}">
                                    <textarea name="contenido" placeholder="Agregar comentario" class="form-control"></textarea>
                                    <button class="btn btn-sm btn-primary mt-1">Añadir</button>
                                </form>
                            </div>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
