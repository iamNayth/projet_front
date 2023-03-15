<?php $title = "Contact"; ?>
<?php ob_start(); ?>

<section id="hero-contact">
    <div id="cut1"></div>
    <div id="cut2"></div>
    <span id="contact-bottom" class="nord w-100 text-center">Remplissez notre formulaire de contact</span>
    <div class="container h-100">
        <div class="row">
            <div class="col-12 text-center text-light fs-1 pt-5">
                <span class="nord-book">Pour tout projets, devis ou conseils</span><br>
                <span class="nord">Contactez nous !</span>
            </div>
        </div>
        <div class="row mt-5 p-5 ">
            <div class="col-6 ">
                <div class="col-12 text-light fs-5 lex d-flex p-3 fw-bold">
                    <div class="logos">
                        <img src="../assets/icons/Instagram.svg">
                    </div>
                    <span>@dimension.agency</span>
                </div>
                <div class="col-12 text-light fs-5 lex d-flex p-3 fw-bold">
                    <div class="logos">
                        <img src="../assets/icons/Linkedin.svg">
                    </div>
                    <span>Dimension Agency</span>
                </div>
                <div class="col-12 text-light fs-5 lex d-flex p-3 fw-bold">
                    <div class="logos">
                        <img src="../assets/icons/phone.svg">
                    </div>
                    <span>03.78.56.23.00</span>
                </div>
            </div>
            <div class="col-6 text-light fs-5 lex d-flex flex-column gap-2 ps-5">
                <span>Discutons de vos projets, nous serons ravis de vous accueillir à l'agence à l'adresse suivante:</span><br>
                <span>46 rue de Clichy 75009 Paris</span><br>
                <span>A 5 minutes de la gare Saint-Lasare, à 15 minute de l'Opéra</span>
            </div>
        </div>
    </div>
</section>
<section class="pt-5 pb-5">
    <div class="container pt-5 pb-5">
        <div class="row gy-5">
            <h1 class="nord">Ecrivez-nous</h1>
            <div class="col-6 d-flex justify-content-center flex-column align-items-center">
                <div class="w-50">    
                    <label class="lex fw-bold fs-4 mb-2" for="name">Nom</label><br>
                    <input class="lex w-100" type="text" name="name">
                </div>
            </div>
            <div class="col-6 d-flex justify-content-center flex-column align-items-center">
                <div class="w-50">    
                    <label class="lex fw-bold fs-4 mb-2" for="surname">Prénom</label><br>
                    <input class="lex w-100" type="text" name="name">
                </div>
            </div>
            <div class="col-6 d-flex justify-content-center flex-column align-items-center">
                <div class="w-50">    
                    <label class="lex fw-bold fs-4 mb-2" for="mail">E-mail</label><br>
                    <input class="lex w-100" type="text" name="name">
                </div>
            </div>
            <div class="col-6 d-flex justify-content-center flex-column align-items-center">
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
                <button id="send" type="submit" class="lex p-3 fw-bold">Envoyer</button>
            </div>
        </div>
    </div>
</section>

<?php $content = ob_get_clean();?>
<?php require('../templates/layout.php') ?>