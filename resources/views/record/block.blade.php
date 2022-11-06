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
          {{-- <td>{{$record->created_at}}</td> --}}
          <td> <textarea name="" id="" cols="20" rows="1">{{$record->text}}</textarea></td>

                <td><a href="{{route('record.show', $record->id)}}"><button class="btn btn-primary">edit</button></a></td>
                <form action="{{route('record.delete', $record->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <td><input type="submit" value="Unblock" class="btn btn-success"></td>
                </form>
                {{-- <td><a href=""><button class="btn btn-danger">block</button></a></td> --}}

          {{-- <td><button class="btn btn-danger">block</button></td> --}}
        </tr>
        @endforeach

        {{-- <div class="mt-3">
            {{ $records->links() }}
        </div> --}}
      </table>


</div>
<div>
    {{ $records->links() }}
</div>
@endsection
