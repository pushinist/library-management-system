@extends('layouts.main')
@section('content')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Create a reader</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ route('readers.store') }}" method="POST">
                @csrf
                <div>
                    <label for="first_name" class="block text-sm/6 font-medium text-gray-900">First name</label>
                    <div class="mt-2">
                        <input value="{{ old('first_name') }}" type="text" name="first_name" id="first_name" required
                               class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        @error('first_name')
                        <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="last_name" class="block text-sm/6 font-medium text-gray-900">Last name</label>
                    <div class="mt-2">
                        <input value="{{ old('last_name') }}" type="text" name="last_name" id="last_name" required
                               class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        @error('last_name')
                        <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="father_name" class="block text-sm/6 font-medium text-gray-900">Father name</label>
                    <div class="mt-2">
                        <input value="{{ old('father_name') }}" type="text" name="father_name" id="father_name" required
                               class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        @error('father_name')
                        <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-sm/6 font-medium text-gray-900">email</label>
                    <div class="mt-2">
                        <input value="{{ old('email') }}" type="email" name="email" id="email" required
                               class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        @error('email')
                        <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="phone" class="block text-sm/6 font-medium text-gray-900">phone</label>
                    <div class="mt-2">
                        <input value="{{ old('phone') }}" type="tel" name="phone" id="phone" required
                               class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        @error('phone')
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
