<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>##</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<style>
    .centro {
        list-style: none;
        display: flex;
        justify-content: space-around;
    }

   .direita{
    display: flex;
    justify-content: flex-end;
    height: 50px;
    flex-direction: c;
   }
   
    .menu {
        background-color: orangered;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="centro">
                <img src="/img/logo/logo_1nova.jpeg" width="150px" height="165px" alt="logo do nosso site">
            </div>
            <div class="direita">
                <button class="btn btn-primary me-md-2" type="button">Login</button>
            </div>
            <div class="direita">
                <button class="btn btn-primary me-md-2" type="button">Cadastre-se</button>
            </div>
        </div>
        <div>
            <ul class="centro menu">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Generos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre</a>
                </li>
            </ul>
        </div>


    </div>

</body>

</html>