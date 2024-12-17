@extends('layouts.main')
@section('content')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Update a book</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ route('books.update', $book->id) }}" method="POST">
                @csrf
                @method('patch')
                <div>
                    <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                    <div class="mt-2">
                        <input type="text" name="title" id="title" value="{{ $book->title }}" required
                               class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                </div>
                <div>
                    <label for="author" class="block text-sm/6 font-medium text-gray-900">author</label>
                    <div class="mt-2">
                        <input type="text" name="author" id="author" value="{{ $book->author }}" required
                               class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                </div>
                <div>
                    <label for="publication_year"
                           class="block text-sm/6 font-medium text-gray-900">publication_year</label>
                    <select
                        id="publication_year"
                        name="publication_year"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    >
                        <option value="{{ $book->publication_year }}" selected>{{ $book->publication_year }}</option>
                        @for($year=now()->year; $year >= 1800; $year--)
                            @if($year != $book->publication_year)
                                <option value="{{ $year }}">{{ $year }}</option>
                            @endif

                        @endfor

                    </select>
                </div>
                <div>
                    <label for="genre" class="block text-sm/6 font-medium text-gray-900">genre</label>
                    <div class="mt-2">
                        <input type="text" name="genre" id="genre" value="{{ $book->genre }}" required
                               class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                </div>
                <div>
                    <label for="ISBN" class="block text-sm/6 font-medium text-gray-900">ISBN</label>
                    <div class="mt-2">
                        <input type="text" name="ISBN" id="ISBN" value="{{ $book->ISBN }}" required
                               class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                </div>
                <div>
                    <label for="amount" class="block text-sm/6 font-medium text-gray-900">amount</label>
                    <div class="mt-2">
                        <input type="number" name="amount" id="amount" value="{{ $book->amount }}" required
                               class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                </div>
                <div>
                    <label for="description" class="block text-sm/6 font-medium text-gray-900">description</label>
                    <div class="mt-2">
                        <input type="text" name="description" id="description" value="{{ $book->description }}"
                               class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                </div>
                <div>
                    <button type="submit"
                            class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
