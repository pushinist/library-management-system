@extends('layouts.main')
@section('content')
    <div>
        <p>{{ $reader->first_name }}</p>
        <p>{{ $reader->last_name }}</p>
        <p>{{ $reader->father_name }}</p>
        <p>{{ $reader->email }}</p>
        <p>{{ $reader->phone }}</p>
        <p>{{ $reader->registered_at }}</p>
    </div>
    <a href="{{ route('readers.edit', $reader->id) }}">Edit</a>
    {{--    <form action="{{ route('readers.destroy', $reader->id) }}" method="post">--}}
    {{--        @csrf--}}
    {{--        @method('delete')--}}
    {{--        <button type="submit">Delete</button>--}}
    {{--    </form>--}}
@endsection

