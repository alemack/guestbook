@extends('layouts.header')
@section('content')
    <div>
        <a href="{{route('record.create')}}" class="btn btn-success mb-3">Add record</a>
    </div>
    <div>

        {{-- @foreach ($records as $record) --}}
        {{-- таблица --}}
        {{-- @endforeach --}}

        {{$records}}
    </div>
@endsection
