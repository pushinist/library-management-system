@extends('layouts.main')
@section('content')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Update a book</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ route('readers.update', $reader->id) }}" method="POST">
                @csrf
                @method('patch')
                <div>
                    <label for="first_name" class="block text-sm/6 font-medium text-gray-900">first_name</label>
                    <div class="mt-2">
                        <input type="text" name="first_name" id="first_name" value="{{ $reader->first_name }}" required
                               class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                </div>
                <div>
                    <label for="last_name" class="block text-sm/6 font-medium text-gray-900">last_name</label>
                    <div class="mt-2">
                        <input type="text" name="last_name" id="last_name" value="{{ $reader->last_name }}" required
                               class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                </div>
                <div>
                    <label for="father_name" class="block text-sm/6 font-medium text-gray-900">father_name</label>
                    <div class="mt-2">
                        <input type="text" name="father_name" id="father_name" value="{{ $reader->father_name }}"
                               required
                               class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                </div>
                <div>
                    <label for="genre" class="block text-sm/6 font-medium text-gray-900">email</label>
                    <div class="mt-2">
                        <input type="email" name="email" id="email" value="{{ $reader->email }}" required
                               class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                </div>
                <div>
                    <label for="phone" class="block text-sm/6 font-medium text-gray-900">phone</label>
                    <div class="mt-2">
                        <input type="tel" name="phone" id="phone" value="{{ $reader->phone }}" required
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
