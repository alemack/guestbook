<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        /* table, th, td {
          border:1px solid black;
        }
        th[role=columnheader]:not(.no-sort) {
        cursor: pointer;
        }

        th[role=columnheader]:not(.no-sort):after {
            content: '';
            float: right;
            margin-top: 7px;
            border-width: 0 4px 4px;
            border-style: solid;
            border-color: #404040 transparent;
            visibility: hidden;
            opacity: 0;
            -ms-user-select: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        th[aria-sort=ascending]:not(.no-sort):after {
            border-bottom: none;
            border-width: 4px 4px 0;
        }

        th[aria-sort]:not(.no-sort):after {
            visibility: visible;
            opacity: 0.4;
        }

        th[role=columnheader]:not(.no-sort):hover:after {
            visibility: visible;
            opacity: 1;
        } */


        </style>
    <title>Records</title>
</head>
<body class="container">
    <header class="p-3 bg-dark text-white">
        <?php
            // // vendor connect
            // require_once '../news/vendor/autoload.php';


            // session_start();
            // // news api conn
            // use jcobhams\NewsApi\NewsApi;
            // include './config/api_key.php';
            // $newsapi = new NewsApi($api_key);
        ?>

        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li>
                        <a href="{{route('record.index')}}"> <button type="submit" class="me-2 btn-outline-light btn btn-dark"
                    title="home page"
                    name="home">Home</button></a>
                    </li>
                    @can('view', auth()->user())
                        <li>
                            <a href="{{route('record.block')}}"> <button type="submit" class="me-2 btn-outline-light btn btn-dark"
                        title="block page"
                        name="block">Blocklist</button></a>
                        </li>
                    @endcan
                </ul>


            {{-- <form action="../search/word_search.php" method="POST">
                <div class="text-end">
                    <button type="submit" name="word_search" class="btn btn-outline-light me-2">Поиск</button>
                </div>
            </form> --}}


            <div class="text-end">
                <a class="mt-5" href="{{route('home')}}"><button type="submit" name="auth" class="btn btn-outline-light me-2">Login</button></a>



            </div>
          </div>
        </div>
      </header>

    {{-- <div class="row">
        <nav>
            <ul>
                <li>
                    <a href="{{route('record.index')}}">Home</a>
                    <a class="mt-5" href="{{route('home')}}">Login</a>
                    <a href="{{route('reg.index')}}">Registration</a>
                </li>
            </ul>
        </nav>
    </div> --}}
    @yield('content')



</body>
</html>
