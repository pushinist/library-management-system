@extends('layouts.main')
@section('content')
    @foreach($transactions as $transaction)
        <div>
            <a href="{{ route('transactions.show', $transaction->id) }}">
                Читатель: {{ $transaction->reader->first_name }} {{ $transaction->reader->last_name }},
                Книга: {{ $transaction->book->title }}</a>
        </div>
    @endforeach
@endsection
