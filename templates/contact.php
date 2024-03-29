<?php $title = "Contact"; ?>
<?php ob_start(); ?>

<section id="hero-contact">
    <div class="d-none d-md-block" id="cut1"></div>
    <div class="d-none d-md-block" id="cut2"></div>
    <span id="contact-bottom" class="d-none d-md-block nord w-100 text-center focusIn">Remplissez notre formulaire de contact</span>
    <div class="container h-100">
        <div class="row">
            <div class="col-12 text-center text-light fs-1 pt-5">
                <h1 class="nord-book fadeInDown">Pour tout projets, devis ou conseils</h1>
                <h2 class="nord fadeInTop fs-1">Contactez nous !</h2>
            </div>
        </div>
        <div class="row mt-5 p-5">
            <div class="col-12 col-md-6 mb-3">
                <div class="col-12 text-light fs-5 lex d-flex flex-column p-3 fw-bold gap-2">
                    <div class="logos">
                        <img src="../assets/icons/Instagram.svg">
                    </div>
                    <span>@dimension.agency</span>
                </div>
                <div class="col-12 text-light fs-5 lex d-flex flex-column p-3 fw-bold gap-2">
                    <div class="logos">
                        <img src="../assets/icons/Linkedin.svg">
                    </div>
                    <span>Dimension Agency</span>
                </div>
                <div class="col-12 text-light fs-5 lex d-flex flex-column p-3 fw-bold gap-2">
                    <div class="logos">
                        <img src="../assets/icons/phone.svg">
                    </div>
                    <span>03.78.56.23.00</span>
                </div>
            </div>
            <div class="col-12 col-md-6 text-light fs-5 lex d-flex flex-column justify-content-centcol-12 er -mdgap-3 ps-5">
                <span>Discutons de vos projets, nous serons ravis de vous accueillir à l'agence à l'adresse suivante:</span>
                <span>46 rue de Clichy 75009 Paris</span>
                <span>A 5 minutes de la gare Saint-Lasare, à 15 minute de l'Opéra</span>
            </div>
        </div>
    </div>
</section>
<section class="pt-5 pb-5">
    <div class="container pt-5 pb-5">
        <div class="row gy-5">
            <h1 class="nord">Ecrivez-nous</h1>
            <div class="col-12 col-md-6 d-flex justify-content-center flex-column align-items-center">
                <div class="w-50">    
                    <label class="lex fw-bold fs-4 mb-2" for="name">Nom</label><br>
                    <input class="lex w-100" type="text" name="name">
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center flex-column align-items-center">
                <div class="w-50">    
                    <label class="lex fw-bold fs-4 mb-2" for="surname">Prénom</label><br>
                    <input class="lex w-100" type="text" name="name">
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center flex-column align-items-center">
                <div class="w-50">    
                    <label class="lex fw-bold fs-4 mb-2" for="mail">E-mail</label><br>
                    <input class="lex w-100" type="text" name="name">
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center flex-column align-items-center">
                <div class="w-50">    
                    <label class="lex fw-bold fs-4 mb-2" for="phone">Téléphone</label><br>
                    <input class="lex w-100" type="text" name="name">
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center flex-column align-items-center gap-3">
                <div class="w-50">    
                    <label class="lex fw-bold fs-4 mb-2" for="message">Message</label><br>
                    <textarea class="lex w-100" type="text" name="name"></textarea>
                </div>
                <button id="send" type="submit" class="lex p-3 fw-bold bg-light">Envoyer</button>
            </div>
        </div>
    </div>
</section>

<?php $content = ob_get_clean();?>
<?php require('../templates/layout.php') ?>