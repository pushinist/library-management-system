@extends('layouts.main')
@section('content')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Create a book</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ route('books.store') }}" method="POST">
                @csrf
                <div>
                    <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                    <div class="mt-2">
                        <input value="{{ old('title') }}" type="text" name="title" id="title" required
                               class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        @error('title')
                        <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="author" class="block text-sm/6 font-medium text-gray-900">author</label>
                    <div class="mt-2">
                        <input value="{{ old('author') }}" type="text" name="author" id="author" required
                               class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">

                        @error('author')
                        <div class="text-red-500">{{ $message }}</div>
                        @enderror
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
                        <option value="" disabled {{ old('publication_year') ? '' : 'selected' }}>Select year</option>
                        @for($year=now()->year; $year >= 1800; $year--)
                            <option value="{{ $year }}" {{ old('publication_year') == $year ? 'selected' : '' }}>{{ $year }}</option>
                        @endfor

                    </select>
                    @error('publication_year')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="genre" class="block text-sm/6 font-medium text-gray-900">genre</label>
                    <div class="mt-2">
                        <input value="{{ old('genre') }}" type="text" name="genre" id="genre" required
                               class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        @error('genre')
                        <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="ISBN" class="block text-sm/6 font-medium text-gray-900">ISBN</label>
                    <div class="mt-2">
                        <input value="{{ old('ISBN') }}" type="text" name="ISBN" id="ISBN" required
                               class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        @error('ISBN')
                        <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="amount" class="block text-sm/6 font-medium text-gray-900">amount</label>
                    <div class="mt-2">
                        <input value="{{ old('amount') }}" type="number"  name="amount" id="amount" required
                               class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        @error('amount')
                        <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="description" class="block text-sm/6 font-medium text-gray-900">description</label>
                    <div class="mt-2">
                        <input value="{{ old('description') }}" type="text" name="description" id="description"
                               class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        @error('description')
                        <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <button type="submit"
                            class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Sign in
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
