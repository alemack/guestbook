@extends('layouts.header')
@section('content')
    <div>
        <a href="{{route('record.create')}}" class="btn btn-success mb-3">Add record</a>
    </div>
    <div>
        {{-- @foreach ($records as $record) --}}
        <table style="width:100%" id="table_id" class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th data-sort-method='none'>Homepage</th>
                    <th data-sort-method='date'>Create</th>
                    <th data-sort-method='none'>Text</th>
                  </tr>
            </thead>
            @foreach ($records as $record)
            <tr>
              <td>{{$record->id}}</td>
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


          {{-- src='/node_modules/tablesort/dist/tablesort.min.js' --}}
        <script src='https://cdnjs.cloudflare.com/ajax/libs/tablesort/5.0.2/tablesort.min.js'></script>
        <!-- Include sort types you need -->
        {{-- <script  src="/node_modules/tablesort/dist/tablesort.min.js"></script>

        <script src="/node_modules/tablesort/src/tablesort.js"></script> --}}

        {{-- <script src="../../js/tablesort.min.js"></script> --}}


        {{-- <script src='/node_modules/tablesort/src/sorts/tablesort.number.js'></script>
        <script src='/node_modules/tablesort/src/sorts/tablesort.date.js'></script> --}}

        <script>
        new Tablesort(document.getElementById('table_id'));
        </script>
    </div>



@endsection
