<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        table, th, td {
          border:1px solid black;
        }
        </style>
    <title>Records</title>
</head>
<body class="container">
    <div class="row">
        <nav>
            <ul>
                <li>
                    <a href="{{route('record.index')}}">Home</a>
                    {{-- <a href="{{route('login.index')}}">Login</a> --}}
                    {{-- <a href="{{route('reg.index')}}">Registration</a> --}}
                </li>
            </ul>
        </nav>
    </div>
    @yield('content')


</body>
</html>
