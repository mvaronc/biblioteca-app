@extends('layouts.master')
@section('title', 'Gestion Biblioteca - Book Details')
@section('navigation')
    <x-boton-enlace ruta="{{ route('books.index') }}">Books List</x-boton-enlace>
    @parent
@endsection
@section('content')
<div>
    <!-- It always seems impossible until it is done. - Nelson Mandela -->
    <h1>{{ $book->title }}</h1>
    <p><strong>Author:</strong> {{ $book->author }}</p>
    <p><strong>Genre:</strong> {{ $book->genre }}</p>
    
    <a style="background-color: red; color:white;" href="{{ route('books.destroy', $book) }}"
       onclick="
        event.preventDefault();
        if(confirm('Are you sure you want to delete this book?'))
            document.getElementById('delete-form').submit();"
        >

        Delete Book
    </a>
        <a style="background-color: orange; color:white;" href="{{ route('books.edit', $book) }}">Edit Book</a>
    <form id="delete-form" action="{{ route('books.destroy', $book) }}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>
</div>
@endsection
