@extends('layouts.master')
@section('title', 'Gestion Biblioteca - Books List')

<div>
    @section('header')
    <h1>Books List</h1>
    @endsection
    @section('navigation')
    <a style="background-color: green; color:white;" href="{{ route('books.create') }}">Add New Book</a>
   @parent
   @endsection
   @section('content')
    <ul>
        @foreach ($books as $book)
            <li>
                <a href="{{ route('books.show', $book) }}">{{ $book->title }} </a>by {{ $book->author }} (Genre: {{ $book->genre }})
            </li>
        @endforeach
    </ul>
    @endsection

</div>


