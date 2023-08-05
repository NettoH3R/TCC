<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>##</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/defalut.css">

    <style>
        .tamanhologo {
            max-width: 100%;
            height: 100%;
        }

        nav#menu {
            background-color: #244bbf;
        }
    </style>

</head>

<body>
    <main id="Tudo">
        <header id="cabecario">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 text-center">
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="./img/logo/logo_1nova.png" class="tamanhologo" alt="Logo do nosso site">
                    </div>
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-3 text-center">
                        <button type="button" class="btn-1">Entrar</button>
                        <button type="button" class="btn-2">Cadastrar</button>
                    </div>
                </div>
            </div>
        </header>
        <nav id="menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li class="naoclicavel"><a href="#">|</a></li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Gêneros
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="naoclicavel"><a href="#">|</a></li>
                            <li><a href="sobre.php">Sobre</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>


        <main>
            <h2>Main</h2>
        </main>

        <footer>
            <h4>@copy desenvolvido pela Equipe 1 | 3ºETIM 2023</h4>
        </footer>
    </main>
</body>

</html>