<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>

    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ route('conta.index')}}" class="nav-link px-2 link-secondary">Pagina Inicial</a></li>

            </ul>

        </header>

    </div>

    <div class="container my-5">
        @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
    </div>

    <div class="container my-5">
        <div class="bg-body-tertiary p-5 rounded">
            <div class="col-sm-8 py-5 mx-auto">
                <h1 class="display-5 fw-normal">{{$conta->nome}}</h1>
                <p class="fs-5">{{$conta->conteudo}}</p>
            </div>
        </div>
    </div>


    <footer class="my-5 pt-5 text-body-secondary text-center text-small">
        <p class="mb-1">© 2024-2028 Montreal</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>



</body>

</html>