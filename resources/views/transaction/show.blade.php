@extends('layouts.main')
@section('content')
    <div>
        <p>Читатель: {{ $transaction->reader->first_name }} {{ $transaction->reader->last_name }}</p>
        <p>Книга: {{ $transaction->book->title }}</p>
        <p>Дата выдачи: {{ $transaction->when_given }} </p>
        <p>Вернуть до: {{ $transaction->return_before }}</p>
        <p> Статус: {{ $transaction->status }}</p>
        <p> Вернули: {{ $transaction->when_returned }}</p>

        @if( $transaction->status != 'returned')
            <form action="{{ route('transactions.update', $transaction) }}" method="post">
                @csrf
                @method('patch')
                <button type="submit">Вернуть книгу</button>
            </form>
        @endif

    </div>
@endsection
