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
    <main>
        <header>
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
        <div class="container">
            <nav id="menu">

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

            </nav>
        </div>

        <div class="container">
            <main class="main">
                <div class="tamanhoCarrosel">
                    <div id="carouselExampleCaptions" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="1000">
                                <img src="img/logo/download.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Exemplo Música 1</h5>
                                    <p>Um breve descrição da música 1.</p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="1000">
                                <img src="img/logo/download.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Exemplo Música 2</h5>
                                    <p>Um breve descrição da música 2.</p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="1000">
                                <img src="img/logo/download.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Exemplo Música 3</h5>
                                    <p>Um breve descrição da música 3.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="quadradinhos">
                    <div class="quadradinho">
                        <img src="img/logo/album.jpg" class="album" alt="Possível álbum a ser colocado">
                    </div>
                    <div class="quadradinho">
                        <img src="img/logo/album.jpg" class="album" alt="Possível álbum a ser colocado">
                    </div>
                    <div class="quadradinho">
                        <img src="img/logo/album.jpg" class="album" alt="Possível álbum a ser colocado">
                    </div>
                    <div class="quadradinho">
                        <img src="img/logo/album.jpg" class="album" alt="Possível álbum a ser colocado">
                    </div>
                </div>
                <div class="quadradinhos">
                    <div class="quadradinho">
                        <img src="img/logo/album.jpg" class="album" alt="Possível álbum a ser colocado">
                    </div>
                    <div class="quadradinho">
                        <img src="img/logo/album.jpg" class="album" alt="Possível álbum a ser colocado">
                    </div>
                    <div class="quadradinho">
                        <img src="img/logo/album.jpg" class="album" alt="Possível álbum a ser colocado">
                    </div>
                    <div class="quadradinho">
                        <img src="img/logo/album.jpg" class="album" alt="Possível álbum a ser colocado">
                    </div>
                </div>
            </main>
        </div>
        <div class="container">
            <footer>
                <h4>@copy desenvolvido pela Equipe 1 | 3ºETIM 2023</h4>
            </footer>
        </div>
    </main>
</body>

</html>