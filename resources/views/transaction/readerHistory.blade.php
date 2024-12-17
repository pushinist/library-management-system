@extends('layouts.main')
@section('content')
    <h1>История читателя {{ $reader->first_name }} {{ $reader->last_name }}</h1>
    @foreach($readerTransactions as $readerTransaction)
        <div>
            <p>{{ $readerTransaction->when_given }}, взял {{ $readerTransaction->book->title }},
                вернул {{ $readerTransaction->when_returned }}</p>
        </div>
    @endforeach
@endsection
