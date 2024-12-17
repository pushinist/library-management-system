@extends('layouts.main')
@section('content')
    <div>
        <p>Title: {{ $book->title }}</p>
        <p>Author: {{ $book->author }}</p>
        <p>Publication year: {{ $book->publication_year }}</p>
        <p>Genre: {{ $book->genre }}</p>
        <p>ISBN: {{ $book->ISBN }}</p>
        <p>Amount: {{ $book->amount }}</p>
        <p>Description: {{ $book->description }}</p>
        <a href="{{ route('books.edit', $book->id) }}">Edit</a>
        <form action="{{ route('books.destroy', $book->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Delete</button>
        </form>
    </div>
@endsection
