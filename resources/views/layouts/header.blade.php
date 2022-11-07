<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
         table, th, td {
          border:1px solid black;
        }
    </style>
    <title>Records</title>
</head>
<body class="container">
<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li>
                    <a href="{{route('record.index')}}">
                        <button type="submit" class="me-2 btn-outline-light btn btn-dark" title="home page" name="home">
                            Home
                        </button>
                    </a>
                </li>
                @can('view', auth()->user())
                    <li>
                        <a href="{{route('record.block')}}">
                            <button type="submit" class="me-2 btn-outline-light btn btn-dark" title="block page" name="block">
                                Blocklist
                            </button>
                        </a>
                    </li>
                @endcan
            </ul>

        <div class="text-end">
            <a class="mt-5" href="{{route('home')}}">
                <button type="submit" name="auth" class="btn btn-outline-light me-2">
                    Login
                </button>
            </a>
        </div>
        </div>
    </div>
</header>

    @yield('content')

</body>
</html>
