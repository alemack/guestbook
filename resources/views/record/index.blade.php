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
              {{-- <td>{{$record->created_at}}</td> --}}
              <td> <textarea name="" id="" cols="20" rows="1">{{$record->text}}</textarea></td>
              @can('view', auth()->user())
                    <td><a href="{{route('record.show', $record->id)}}"><button class="btn btn-primary">edit</button></a></td>
                    <form action="{{route('record.delete', $record->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <td><input type="submit" value="Delete" class="btn btn-danger"></td>
                    </form>
                    {{-- <td><a href=""><button class="btn btn-danger">block</button></a></td> --}}
              @endcan
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


    {{-- src='/node_modules/tablesort/dist/tablesort.min.js' --}}
    {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/tablesort/5.0.2/tablesort.min.js'></script> --}}
    <!-- Include sort types you need -->
    {{-- <script  src="/node_modules/tablesort/dist/tablesort.min.js"></script>

    <script src="/node_modules/tablesort/src/tablesort.js"></script> --}}

    {{-- <script src="../../js/tablesort.min.js"></script> --}}


    {{-- <script src='/node_modules/tablesort/src/sorts/tablesort.number.js'></script>
    <script src='/node_modules/tablesort/src/sorts/tablesort.date.js'></script> --}}
{{--
    <script>
    new Tablesort(document.getElementById('table_id'));
    </script> --}}
@endsection
