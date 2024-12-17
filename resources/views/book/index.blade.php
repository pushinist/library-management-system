@extends('layouts.main')
@section('content')

    @foreach($books as $book)
        <div>
            <a href="{{ route('books.show', $book->id) }}"> {{ $book->title }}</a>
        </div>
    @endforeach
    <div>
        <form action="{{ route('books.search') }}" method="get">
            <input type="text" name="title" placeholder="title">
            <input type="text" name="author" placeholder="author">
            <input type="text" name="genre" placeholder="genre">
            <button type="submit">Search</button>
        </form>
    </div>
@endsection
