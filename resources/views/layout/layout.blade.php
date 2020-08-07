<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width,maximum-scale=1.0,user-scalable=no,initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/home.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
    <title>ELearning Migrare 101</title>
</head>

<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
        <b><a class="navbar-brand" href="#">Migrare Elearning 101
                <!--<img id="logoM" src="/img/Migrare-Elearning-101.png" alt="">-->
            </a></b>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form id="buscarC" class="my-2 my-lg-0">
                <div class="form-row">
                  <div class="col-md-6 col-11">
                    <input type="text" class="form-control" placeholder="Buscar Cursos">
                  </div>
                  <div class="col-md-6 col-1">
                    <button class="btn btn-outline-light" type="submit">Buscar</button>
                  </div>
                </div>
              </form>
              <div class="mx-auto my-2 my-lg-0 text-center">
                <svg width="2.5em" height="2.2em" viewBox="0 0 16 16" class="bi bi-power" fill="white" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.578 4.437a5 5 0 1 0 4.922.044l.5-.866a6 6 0 1 1-5.908-.053l.486.875z"/>
                    <path fill-rule="evenodd" d="M7.5 8V1h1v7h-1z"/>
                  </svg>
                </div>
            
        </div>
    </nav>

    @yield('content')

    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>