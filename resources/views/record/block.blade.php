@extends('layouts.header')
@section('content')
<div>
    <table style="width:100%" id="table_id" class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Email</th>
                <th data-sort-method='none'>Homepage</th>
                <th data-sort-method='date'>Create</th>
                <th data-sort-method='date'>Delete</th>
                <th data-sort-method='none'>Text</th>
              </tr>
        </thead>
        @foreach ($records as $record)
        <tr>
          <td>{{$record->id}}</td>
          <td>{{$record->user_name}}</td>
          <td>{{$record->email}}</td>
          <td>{{$record->homepage}}</td>
          <td>{{date('d.m.Y H:i', (strtotime(substr($record->created_at, 0, 16))));}}</td>
          <td>{{date('d.m.Y H:i', (strtotime(substr($record->deleted_at, 0, 16))));}}</td>
          <td> <textarea name="" id="" cols="20" rows="1">{{$record->text}}</textarea></td>
            <form action="{{route('record.restore', $record->id)}}" method="POST">
                @csrf
                <td><input type="submit" value="Unblock" class="btn btn-success"></td>
            </form>
        </tr>
        @endforeach
      </table>
</div>
<div>
    {{ $records->links() }}
</div>
@endsection
