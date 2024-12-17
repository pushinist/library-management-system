@extends('layouts.main')
@section('content')
    <h1>История выдач книги {{ $bookTitle }}</h1>
    @foreach($bookTransactions as $bookTransaction)
        <div>
            <p>{{ $bookTransaction->when_given }},
                взял {{ $bookTransaction->reader->first_name }} {{ $bookTransaction->reader->last_name }},
                вернул {{ $bookTransaction->when_returned }}</p>
        </div>
    @endforeach
@endsection
