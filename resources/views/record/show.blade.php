@extends('layouts.header')
@section('content')

    <div>
        <div>{{$record->id}}. {{$record->user_name}}</div>
        <div>{{$record->content}}</div>
      </div>


  <div>
    <a href="{{route('record.edit', $record->id)}}">Edit</a>
  </div>
  <div>
    <form action="{{route('record.delete', $record->id)}}" method="POST">
    @csrf
    @method('delete')

      <input type="submit" value="Delete" class="btn btn-danger">
    </form>
  </div>
  <div>
    <a href="{{route('record.index')}}">Back</a>
  </div>
@endsection
