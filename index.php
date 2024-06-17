<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="estilo.css">

</head>

<body>

    <header>

    <nav class="navbar bg-light navbar-expand-lg">
  <div class="container-fluid ">

    <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page"  href="index.php?menuop=home">Home</a>
        <a class="nav-link" href="index.php?menuop=calculadora">Calculadora</a>
        <a class="nav-link" href="index.php?menuop=imc">IMC</a>
      
      </div>

    </div>

  </div>

    </header>

    <main>
        <?php

        $menuop = (isset($_GET["menuop"])) ? $_GET["menuop"] : "home";

        switch ($menuop) {
            case 'home':
                include("paginas/home/home.php");
                break;
            case 'calculadora':
                include("paginas/calculadora/calculadora.php");
                break;
            case 'imc':
                include("paginas/imc/imc.php");
                break;
            case 'perfil':
                include("paginas/perfil/perfil.php");
                break;

            default:
                include("paginas/home/home.php");
                break;
        };


        ?>
    </main>


    <footer>


    </footer>


</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</html>