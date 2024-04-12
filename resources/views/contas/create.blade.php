<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>

    <!-- <form action="{{ route('conta.store')}}" method="post">
        @csrf

        <label>Nome da Materia:</label>
        <input type="text" name="nome" id="nome" placeholder="Nome da Materia"><br><br>

        <label>Materia:</label>
        <input type="text" name="conteudo" id="conteudo" placeholder="Conteudo da Materia"><br><br>

        <button type="submit">Criar</button>

    </form> -->

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


    <div class="container">
        <main>

            <div class="row g-5">

                <div class="modal-content rounded-4 shadow">
                    <h4 class="mb-3">Criar Conteúdo</h4>


                    <form action="{{ route('conta.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <!-- <div class="mb-3">
                                <label for="formFile" class="form-label">img</label>
                                <input class="form-control" id="image" name="image" type="file" id="formFile">
                            </div> -->

                            <div>
                                <label for="firstName" class="form-label">Título do Conteúdo:</label>
                                <input type="text" name="nome" class="form-control" id="firstName" placeholder="Título do Conteúdo">

                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Texto do Conteúdo:</label>
                                <textarea type="text" name="conteudo" class="form-control" id="exampleFormControlTextarea1" placeholder="Texto do Conteúdo"></textarea>

                            </div>



                            <button class="w-100 btn btn-primary btn-lg" type="submit">Criar</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>

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