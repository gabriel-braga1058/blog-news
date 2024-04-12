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

        
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <span class="fs-4">Braga News</span>
                </a>

                <ul class="nav nav-pills">
                    
                    <li class="nav-item"><a href="#" class="nav-link"></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"></a></li>
                    <li class="nav-item"><a href="{{ route('conta.create')}}" class="nav-link">Criar Conteúdo</a></li>
                </ul>
            </header>
        </div>




        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($contas as $conta)

            <div class="col">
                <div class="card h-100">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $conta->nome }}</h5>
                        <p class="card-text"> {{$conta->conteudo }}</p>
                        <a href="{{ route('conta.show', ['conta' => $conta->id])}}" class="btn btn-primary">Ler mais</a>
                        <a href="{{ route('conta.edit', ['conta' => $conta->id])}}" class="btn btn-primary">editar</a>

                    </div>
                </div>
            </div>



            @endforeach

        </div>

        <footer class="my-5 pt-5 text-body-secondary text-center text-small">
            <p class="mb-1">© 2024-2028 Montreal</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>
</body>

</html>