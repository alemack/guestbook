@extends('layouts.header')
@section('content')
    <div>
        <a href="{{route('record.create')}}" class="btn btn-success mb-3">Add record</a>
    </div>
    <div>
        {{-- @foreach ($records as $record) --}}
        <table style="width:100%">
            <tr>
              <th>Username</th>
              <th>Email</th>
              <th>Homepage</th>
              <th>Create</th>
              <th>Text</th>
            </tr>
            @foreach ($records as $record)
            <tr>
              <td>{{$record->user_name}}</td>
              <td>{{$record->email}}</td>
              <td>{{$record->homepage}}</td>
              <td>{{date('d.m.Y', (strtotime(substr($record->created_at, 0, 10))));}}</td>
              <td> <textarea name="" id="" cols="20" rows="1">{{$record->text}}</textarea></td>
              <td><a href="{{route('record.show', $record->id)}}"><button class="btn btn-primary">edit</button></a></td>
              <td><button class="btn btn-danger">block</button></td>
            </tr>
            @endforeach
          </table>
        {{-- <div><a href="{{route('record.show', $record->id)}}">{{$record->id}}. {{$record->email}}</a></div> --}}
        {{-- @endforeach --}}
    </div>

    <script src='tablesort.min.js'></script>

<!-- Include sort types you need -->
<script src='tablesort.number.js'></script>
<script src='tablesort.date.js'></script>

<script>
  new Tablesort(document.getElementById('table-id'));
</script>
@endsection
