<?php $title = "Accueil"; ?>
<?php ob_start(); ?>
    <section id="hero-home" class="mb-5 position-relative">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col d-flex align-items-center justify-content-center flex-column">
                    <span class="nord-book text-light fs-1">Internet est un univers vaste.</span><br>
                    <span class="nord text-light fs-1 ">Laissez-nous vous guider.</span>
                </div>
            </div>
        </div>
        <span id="hero-txt-bottom">Faites le grand saut</span>
        <div id="up-line"></div>
    </section>
    <section class="mb-5 p-5 position-relative">
        <div class="container">
            <div class="row gx-5">
                <div class="col">
                    <h1 class="nord mb-3">Bien plus qu'une simple agence</h1>
                    <p class="lex">Spécialisée en social media, branding ainsi que dans le développement de site internet vitrine ou e-commerce, Dimension est bien plus qu'une agence de communication digitale ! Notre ADN ? Accompagner nos partenaires pour qu'ils ne soient plus perdus dans le vaste univers qu'est Internet et conquérir avec eux les bonnes planètes... Même lorsque la mission va au delà du web !</p>
                </div>
                <div class="col d-flex align-items-center justify-content-end">
                    <img src="../assets/images/accueil_illustration.jpg" class="img-fluid rounded-circle" style="height: 25em; width: 25em">
                </div>
            </div>
        </div>
        <div id="design-1"><img src="../assets/images/Design 1.svg"></div>
    </section>:
    <section>
        <div id="expertises-home">
            <div  class="container pt-5 pb-5">
                <div class="row d-flex align-items-center">
                    <div class="col-12 d-flex align-items-center justify-content-center flex-column">
                        <span class="nord-book text-light fs-1">4 grands domaines</span>
                        <span class="nord text-light fs-1 ">d'expertises</span>
                    </div>
                    <div class="col text-center">
                        <img class="img-fluid" src="../assets/icons/Stratégie.svg">
                    </div>
                    <div class="col text-center">
                        <img class="img-fluid" src="../assets/icons/Creation.svg">
                    </div>
                    <div class="col text-center">
                        <img class="img-fluid" src="../assets/icons/Développement.svg">
                    </div>
                    <div class="col text-center">
                        <img class="img-fluid" src="../assets/icons/Web marketing.svg">
                    </div>
                </div>
            </div>
            <div class="container pb-5">
                <div class="row">
                    <div class="col-3 text-center">
                        <a href="" class="fs-3 text-light nord-book">Strategie</a>
                    </div>
                    <div class="col-3 text-center">
                        <a href="" class="fs-3 text-light nord-book">Creation</a>
                    </div>
                    <div class="col-3 text-center">
                        <a href="" class="fs-3 text-light nord-book">Developpement</a>
                    </div>
                    <div class="col-3 text-center">
                        <a href="" class="fs-3 text-light nord-book">Webmarketing</a>
                    </div>
                    <div class="col"></div>
                    <div class="col-8  pt-3 d-flex align-items-center justify-content-center">
                        <p class="text-light text-center lex">De la genèse de votre projet jusqu'à sa mise en orbite, Dimension est en mesure de vous accompagner sur 20 missions bien distinctes. Du digital au print en passant par la vidéo ou la photo, notre objectif reste le même : apporter une solution claire et compréhensible à nos partenaires.</p>
                    </div>
                    <div class="col"></div>
                    <div class="col-12 d-flex justify-content-center align-items-center mt-3">
                        <button class="button bg-light">En savoir +</button>
                    </div>
                </div>
            </div>


        </div>
    </section>

<?php $content = ob_get_clean();?>
<?php require('../templates/layout.php') ?>