@extends('layouts.master')
    @section('title', 'Gestion Biblioteca - Dashboard')
    @section('navigation')
       
        <x-boton-enlace ruta="{{ route('books.index') }}">Libros</x-boton-enlace>
        <x-boton-enlace ruta="no activo">Autores</x-boton-enlace>
        @parent
    @endsection
      
    @section('content')
    @endsection


