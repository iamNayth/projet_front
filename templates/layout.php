<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300&display=swap" rel="stylesheet">
    <link href="../assets/style.css" rel="stylesheet" />
</head>
  <body >
    <header class="position-relative w-100">
        <nav class="fixed-top">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <div class="col d-flex align-items-center ps-5">
                        <a href="../public/index.php?page=homepage"><img src="../assets/icons/dimension.black.svg"></a>  
                    </div>
                    <div class="col d-flex align-items-center justify-content-end gap-5 fs-5 pe-5">
                        <a class="pcolor d-none d-lg-block d-xl-block d-xxl-block" href="../public/index.php?page=agence">l'agence</a>
                        <a class="pcolor d-none d-lg-block d-xl-block d-xxl-block" href="../public/index.php?page=expertises">expertises</a>
                        <a class="pcolor d-none d-lg-block d-xl-block d-xxl-block" href="../public/index.php?page=projets">projets</a>
                        <a class="pcolor d-none d-lg-block d-xl-block d-xxl-block" href="../public/index.php?page=contact">contact</a>
                        <a class="d-none d-lg-block d-xl-block d-xxl-block" href="https://fr.linkedin.com/"><img src="../assets/icons/Linkedin.black.svg"></a>
                        <a class="d-none d-lg-block d-xl-block d-xxl-block" href="https://www.instagram.com/"><img src="../assets/icons/Instagram.black.svg"></a>
                        <a href="#wrap" class="burger d-lg-none d-xl-none" id="open"><img class="" src="../assets/icons/burger.svg"></a>
                    </div>
                </div>
            </div>
        </nav>

    </header>
    <div id="wrap">
        <div class="nav d-flex align-items-center justify-content-center">
            <div class="p-5 h-100 d-flex flex-column gap-5 align-items-center">
                <a href="#" id="close" class="text-light">×</a>
                <a class="text-light" href="../public/index.php?page=agence">l'agence</a>
                <a class="text-light" href="../public/index.php?page=expertises">expertises</a>
                <a class="text-light" href="../public/index.php?page=projets">projets</a>
                <a class="text-light" href="../public/index.php?page=contact">contact</a>
                <a href="https://fr.linkedin.com/"><img src="../assets/icons/Linkedin.svg"></a>
                <a href="https://www.instagram.com/"><img src="../assets/icons/Instagram.svg"></a>
            </div>
        </div>
    </div>
    <main>
        <?= $content ?>
    </main>
    <footer>
        <div class="container h-100 p-5">
            <div class="row h-75 gy-5">
                <div class="col">
                    <a class="text-light fs-5" href="../public/index.php?page=homepage">accueil</a>
                </div>
                <div class="col d-flex flex-column gap-3 position-relative">
                    <a class="text-light fs-5" href="../public/index.php?page=agence">l'agence</a><br>
                    <div class="indent"></div>
                    <a class="lex text-light ps-5" href="">L'ADN de l'agence</a>
                    <a class="lex text-light ps-5" href="">L'équipage</a>
                </div>
                <div class="col d-flex flex-column gap-3 position-relative">
                    <a class="text-light fs-5" href="../public/index.php?page=expertises">expertises</a>
                    <div class="indent"></div>
                    <a class="lex text-light ps-5 mt-4" href="">Stratégie</a>
                    <a class="lex text-light ps-5" href="">Création</a>
                    <a class="lex text-light ps-5" href="">Développement</a>
                    <a class="lex text-light ps-5" href="">Webmarketing</a>
                </div>
                <div class="col d-flex flex-column gap-3 position-relative">
                    <a class="text-light fs-5" href="../public/index.php?page=homepage">projets</a>
                </div>
                <div class="col d-flex flex-column gap-3 position-relative">
                    <a class="text-light fs-5" href="../public/index.php?page=homepage">contact</a>
                    <div class="indent"></div>
                    <a class="lex text-light ps-5 mt-4" href="">contact@dimension.com</a>
                    <a class="lex text-light ps-5" href="">Tel: 03.78.56.23.00</a>
                    <a class="lex text-light ps-5" href="">49 Rue de Clichy 75009 Paris</a>
                    <a class="lex text-light ps-5" href=""><img src="../assets/icons/Linkedin.svg"></a>
                    <a class="lex text-light ps-5 ms-2" href=""><img src="../assets/icons/Instagram.svg"></a>
                </div>
            </div>
            <div class="row mt-5 h-25">
                <div class="col d-none d-lg-block d-xl-block d-xxl-block">

                </div>
                <div class="col d-flex align-items-center d-none d-lg-block d-xl-block d-xxl-block">
                    <span style="font-size:12px;" class="lex text-light text-center">2023 All rights reserved to Dimension - Mentions légales</span>
                </div>
                <div class="col d-flex align-items-center justify-content-end">
                    <a href="../public/index.php?page=homepage"><img src="../assets/icons/dimension.white.svg"></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">



    </script>
  </body>
</html>