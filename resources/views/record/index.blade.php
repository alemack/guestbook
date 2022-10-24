@extends('layouts.header')
@section('content')
    <div>
        <a href="{{route('record.create')}}" class="btn btn-success mb-3">Add record</a>
    </div>
    <div>
        @foreach ($records as $record)
        <div><a href="{{route('record.show', $record->id)}}">{{$record->id}}. {{$record->email}}</a></div>
        @endforeach

    </div>
@endsection
