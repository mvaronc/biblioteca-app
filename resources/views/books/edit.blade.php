@extends('layouts.master')
@section('title', 'Gestion Biblioteca - Edit Book')
@section('navigation')
    <x-boton-enlace ruta="{{ route('books.index') }}">Books List</x-boton-enlace>
    @parent
@endsection

@Section('header')
    <h1>Edit Book</h1>
@endsection
@section('content')
    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ old('title', $book->title) }}" required>
        @error('title')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>
        <label for="author">Author:</label>
        <input type="text" id="author" name="author" value="{{ old('author', $book->author) }}" required>
        @error('author')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>
        <label for="genre">Genre:</label>
        <select id="genre" name="genre" required>
            <option value="prose" {{ old('genre', $book->genre) === 'prose' ? 'selected' : '' }}>Prose</option>
            <option value="poetry" {{ old('genre', $book->genre) === 'poetry' ? 'selected' : '' }}>Poetry</option>
            <option value="theatre" {{ old('genre', $book->genre) === 'theatre' ? 'selected' : '' }}>Theatre</option>
        </select>
        <br>
        <button type="submit">Update Book</button>
    </form> 
@endsection
