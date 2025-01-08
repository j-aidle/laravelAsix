@extends('books.layout')

@section('content')
<div class="card mt-5">
    <h2 class="card-header">Add New Book</h2>
    <div class="card-body">
        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" >Nom:</label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="name"
                >
            </div>
            <div class="mb-3">
                <label for="author" >Autor:</label>
                <input
                    type="text"
                    name="author"
                    id="author"
                    placeholder="author"
                >
            </div>
            <div class="mb-3">
                <label for="releaseYear" >Any de publicació:</label>
                <input
                    type="number"
                    name="releaseYear"
                    id="releaseYear"
                    placeholder="releaseYear"
                >
            </div>
            <button type="submit" class="btn btn-success">Add Book</button>
        </form>
    </div>
</div>
@endsection
