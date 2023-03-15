<?php $title = "L'Agence"; ?>
<?php ob_start(); ?>

<section id="hero-agence">
    <div class="container-fluid h-100" id="bg-agence">
        <div class="row h-100 d-flex align-items-center justify-content-center">
            <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                <img src="../assets/icons/dimension.white.svg" class="img-fluid" style='height:100px;'>
                <span class="lex text-light fs-5">le voyage commence avec vous.</span>
            </div>
        </div>
    </div>
</section>
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h1 class="nord mb-3">Nos projets</h1>
            </div>
            <div class="col-6">
                <p class="lex">Dimension est constitué d'experts mais surtout de passionnés du digital ! Pluridisciplinaire et issu de différents secteurs d'activité, chaque membre vient apporter son expertise lors des différents projets. Au delà des compétences, c'est tout l'équipage qui évolue dans la bonne humeur et l'ambition de conquérir l'univers chaque jour auprès de nos clients.</p>
            </div>
            <div class="col-6">
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col d-flex flex-column justify-content-center align-items-center position-relative">
                <img src="../assets/images/chloe.jpg" class="team mb-3 img-fluid">
                <span class="fs-4 fw-bold lex">Chloé</span>
                <span class="lex fw-lighter">Directrice artistique</span>
                <img src="../assets/icons/Chloé-design.svg" id="chloe-design">
            </div>
            <div class="col d-flex flex-column justify-content-center align-items-center position-relative">
                <img src="../assets/images/stephane.jpg" class="team mb-3 img-fluid">
                <span class="fs-4 fw-bold lex">Stéphane</span>
                <span class="lex fw-lighter">Graphiste</span>
                <img src="../assets/icons/Stephane-design.svg" id="stephane-design">
            </div>
            <div class="col d-flex flex-column justify-content-center align-items-center position-relative">
                <img src="../assets/images/thomas.jpg" class="team mb-3 img-fluid">
                <span class="fs-4 fw-bold lex">Thomas</span>
                <span class="lex fw-lighter">CEO</span>
                <img src="../assets/icons/Thomas-design.svg" id="thomas-design">
            </div>
            <div class="col d-flex flex-column justify-content-center align-items-center position-relative">
                <img src="../assets/images/julie.jpg" class="team mb-3 img-fluid">
                <span class="fs-4 fw-bold lex">Julie</span>
                <span class="lex fw-lighter">Assistante DA</span>
                <img src="../assets/icons/Julie-design.svg" id="julie-design">
            </div>
            <div class="col d-flex flex-column justify-content-center align-items-center position-relative">
                <img src="../assets/images/damien.jpg" class="team mb-3 img-fluid">
                <span class="fs-4 fw-bold lex">Damien</span>
                <span class="lex fw-lighter">Developpeur Web</span>
                <img src="../assets/icons/Damien-design.svg" id="damien-design">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row ">
            <div class="col-12 position-relative">
                <h2 class="nord text-center">"Dans le domaine de la technologie, la simplification est toujours une enorme avancee."</h2>
                <span class="position-absolute bottom-0 end-0 lex fs-5 fw-bold">Pierre Boule</span>
            </div>
            
        </div>
    </div>
</section>
<section>
    <h1 class="text-center nord">Nos recents projets</h1>
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-3">
                <img class="img-fluid" src="../assets/images/agence_projet1.png">
            </div>
            <div class="col-3">
                <img class="img-fluid" src="../assets/images/agence_projet2.png">
            </div>
            <div class="col-3">
                <img class="img-fluid" src="../assets/images/agence_projet3.png">
            </div>
            <div class="col-3">
                <img class="img-fluid" src="../assets/images/agence_projet4.png">
            </div>
            <div class="col-12 text-center mt-5">
                <a href="../public/index.php?page=projets"><button class="button bg-light">PLUS DE PROJETS</button></a>
            </div>
        </div>
    </div>
</section>
<section id="agence-recrutement">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                <span class='nord fs-3 text-light'>Envie de rejoindre l'equipage ?</span>
                <span class='nord fs-3 text-light'>Contactez-nous !</span>
                <span class='lex fs-1 fw-bolder text-light'>contact@dimension.com</span>
                <span class='lex fs-4 text-light'>ou remplissez le <a href="../public/index.php?page=contact" style="text-decoration:underline; color: white">formulaire de contact</a></span>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="nord text-center">Un projet ? notre equipe est prete a vous preter main forte dans ce grand voyage !</h1>
                <a href="../public/index.php?page=contact"><button class="button bg-light mt-5">Contactez-nous</button></a>
            </div>
        </div>
    </div>
</section>

<?php $content = ob_get_clean();?>
<?php require('../templates/layout.php') ?>