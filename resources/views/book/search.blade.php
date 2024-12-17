@extends('layouts.main')
@section('content')
    @foreach($books as $book)
        <div>
            <a href="{{ route('books.show', $book->id) }}"> {{ $book->title }}</a>
        </div>
    @endforeach
    <a href="{{ route('books.index') }}">Back</a>
@endsection
