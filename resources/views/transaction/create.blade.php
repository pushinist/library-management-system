@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('transactions.store') }}" method="post">
            @csrf
            <label for="book_id"
                   class="block text-sm/6 font-medium text-gray-900">Доступные книги</label>
            <select
                id="book_id"
                name="book_id"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
            >

                @foreach($books as $book)
                    <option value="{{ $book->id }}">{{ $book->title }}, доступных
                        экземпляров: {{ $book->amount }}</option>
                @endforeach

            </select>

            <label for="reader_id"
                   class="block text-sm/6 font-medium text-gray-900">Доступные читатели</label>
            <select
                id="reader_id"
                name="reader_id"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
            >

                @foreach($readers as $reader)
                    <option value="{{ $reader->id }}">{{ $reader->first_name }} {{$reader->last_name}}</option>
                @endforeach

            </select>

            <button type="submit">Give a book</button>
        </form>

    </div>
@endsection
