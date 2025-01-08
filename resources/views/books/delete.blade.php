@extends('books.layout')

@section('content')
    <div class="card mt-5">
        <h2 class="card-header">Delete Book</h2>
        <div class="card-body">
            <p>Segur que vols eliminar el llibre: {{ $book->name }} ?</p>
            <a href="{{ route('books.destroy', $book->id) }}">Eliminar</a>
            <a href="{{ route('books.index') }}">Tornar als llibres</a>
        </div>
    </div>
@endsection
