@extends('layouts.header')
@section('content')
<div>
    <a href="{{route('record.create')}}" class="btn btn-success mb-3 mt-3">Add record</a>
</div>
<div>
    <table style="width:100%" id="table_id" class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Email</th>
                <th data-sort-method='none'>Homepage</th>
                <th data-sort-method='date'>Create</th>
                <th data-sort-method='date'>Update</th>
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
            <td>{{date('d.m.Y H:i', (strtotime(substr($record->updated_at, 0, 16))));}}</td>
            <td> <textarea name="" id="" cols="20" rows="1">{{$record->text}}</textarea></td>
            @can('view', auth()->user())
            <form action="{{route('record.edit', $record->id)}}" method="GET">
                @csrf
                <td><button class="btn btn-primary">Edit</button></td>
            </form>
            <form action="{{route('record.delete', $record->id)}}" method="POST">
                @csrf
                @method('delete')
                <td><input type="submit" value="Block" class="btn btn-danger"></td>
            </form>
            @endcan
        </tr>
        @endforeach
        </table>
</div>
<div>
    {{ $records->links() }}
</div>
@endsection
