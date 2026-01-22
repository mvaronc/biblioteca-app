<div>
    <!-- It is never too late to be what you might have been. - George Eliot -->
    <h1>Books List</h1>
    <a style="background-color: green; color:white;" href="{{ route('books.create') }}">Add New Book</a>
    <ul>
        @foreach ($books as $book)
            <li>
                <a href="{{ route('books.show', $book) }}">{{ $book->title }} </a>by {{ $book->author }} (Genre: {{ $book->genre }})
            </li>
        @endforeach
    </ul>


</div>
