@extends('layouts.header')
@section('content')
<form action="{{route('record.update', $record->id)}}" method="post">
    @csrf
    @method('patch')
  <div class="form-group">
    <label for="user_name">User name</label>
    <input type="text" name="user_name" class="form-control" id="user_name"  placeholder="User name" value="{{$record->user_name}}">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input name="email" class="form-control" id="email"  placeholder="Email" value= "{{$record->email}}">
  </div>
  <div class="form-group">
    <label for="homepage">Homepage</label>
    <input type="text" name="homepage" class="form-control" id="homepage"  placeholder="homepage" value="{{$record->homepage}}">
  </div>
  <div class="form-group">
    <label for="text">Text</label>
    <textarea type="text" name="text" class="form-control" id="text"  placeholder="Text">{{$record->text}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
