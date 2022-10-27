@extends('layouts.header')
@section('content')
<form action="{{route('record.store')}}" method="post">
    {{-- {!! csrf_field() !!} --}}
    <!-- чтобы был хоть какой-то уровень защиты нужен @csrf -->
    @csrf
  <div class="form-group">
    <label for="user_name">User name</label>
    <input
    value="{{old('user_name')}}"
    type="text" name="user_name" class="form-control" id="user_name"  placeholder="User name">

    @error('user_name')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input
    value="{{old('email')}}"
    type="email" name="email" class="form-control" id="email" placeholder="Email">
    @error('email')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>
  <div class="form-group">
    <label for="homepage">Homepage</label>
    <input
    value="{{old('homepage')}}"
    type="text" name="homepage" class="form-control" id="homepage" placeholder="Homepage">
    @error('homepage')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>
  <div class="form-group">
    <label for="text">Text</label>
    <textarea name="text" class="form-control" id="text"  placeholder="Text"></textarea>
    @error('text')
    <p class="text-danger">{{$message}}</p>
    @enderror

  </div>
  <div class="form-group">
    <label for="captcha"></label>
    <p>{!!captcha_img()!!}</p>
    <img src="{{Captcha::src('default')}}" alt="captcha" class="captcha-img" data-refresh-config="default"><a href="#" id="refresh"><span class="glyphicon glyphicon-refresh"></span></a></p>
</div>
<div class="form-group">
    <label>Капча</label>
    <input class="form-control" type="text" name="captcha"/>
</div>

  <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection
