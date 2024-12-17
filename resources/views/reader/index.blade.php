@extends('layouts.main')
@section('content')

    @foreach($readers as $reader)
        <div>
            <a href="{{ route('readers.show', $reader->id) }}"> {{ $reader->first_name }}, {{ $reader->last_name }}</a>
        </div>
    @endforeach
@endsection
