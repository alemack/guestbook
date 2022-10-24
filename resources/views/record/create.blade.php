@extends('layouts.header')
@section('content')
<form action="{{route('record.store')}}" method="post">
    <!-- чтобы был хоть какой-то уровень защиты нужен @csrf -->
    @csrf
  <div class="form-group">
    <label for="user_name">User name</label>
    <input type="text" name="user_name" class="form-control" id="user_name"  placeholder="User name">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="homepage">Homepage</label>
    <input type="text" name="homepage" class="form-control" id="homepage" placeholder="Homepage">
  </div>
  <div class="form-group">
    <label for="text">Text</label>
    <textarea name="text" class="form-control" id="text"  placeholder="Text"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection
