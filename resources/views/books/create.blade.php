@extends('layouts.master')
@section('title', 'Gestion Biblioteca - Add New Book')
    @section('header')
    <h1>Add New Book</h1>
    @endsection
    @section('navigation')
    <x-boton-enlace ruta="{{ route('books.index') }}">Books List</x-boton-enlace>
    @parent
    @endsection 
    @section('content')
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title"   value="{{ old('title') }}"  required>
        @error('title')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>
        <label for="author">Author:</label>
        <input type="text" id="author" name="author" value="{{ old('author') }}" required>
           @error('author')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>
        <label for="genre">Genre:</label>
        <select id="genre" name="genre" required>
            <option value="prose">Prose</option>
            <option value="poetry">Poetry</option>
            <option value="theatre">Theatre</option>
        </select>
        <br>
        <button type="submit">Add Book</button>
    </form>

    @endsection
