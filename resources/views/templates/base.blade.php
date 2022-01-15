<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('titulo')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        .navbar {
            transition: all 0.4s;
        }

        .navbar .nav-link {
            color: #fff;
        }

        .navbar .nav-link:hover,
        .navbar .nav-link:focus {
            color: #fff;
            text-decoration: none;
        }

        .navbar .navbar-brand {
            color: #fff;
        }

        .navbar.active {
            background: #fff;
            box-shadow: 1px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar.active .nav-link {
            color: #555;
        }

        .navbar.active .nav-link:hover,
        .navbar.active .nav-link:focus {
            color: #555;
            text-decoration: none;
        }

        .navbar.active .navbar-brand {
            color: #555;
        }

        @media (max-width: 991.98px) {
            .navbar {
                background: #fff;
            }

            .navbar .navbar-brand,
            .navbar .nav-link {
                color: #555;
            }
        }

        h1 {
            margin-top: 100px;
        }


        .text-small {
            font-size: 0.9rem !important;
        }

        .bg-cover {
            background-size: cover !important;
            height: 500px;
        }

        body {
            min-height: 100vh;
        }
    </style>
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top py-3">
            <div class="container"><a href="{{ route('home') }}" class="navbar-brand text-uppercase font-weight-bold">Trabalho</a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="{{ route('galeria') }}" class="nav-link text-uppercase font-weight-bold">Galeria</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('conteudo')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>