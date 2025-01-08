@extends('books.layout')

@section('content')
<div class="card mt-5">
    <h2 class="card-header">CRUD de Books</h2>
    <div class="card-body">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success btn-sm" href="{{ route('books.create')}}">Add Book</a>
        </div>
        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Autor</th>
                    <th>Any de publicació</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->name }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->releaseYear }}</td>
                        <td>
                            <a class="btn btn-success btn-sm" href="{{ route('books.edit', $book->id)}}">Edit</a>
                            <a class="btn btn-success btn-sm" href="{{ route('books.delete', $book->id)}}">Delete</a>
                         </td>
                    </tr>
                @empty
                    <tr>
                        <td>No hi han dades a la Base de dades!</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
