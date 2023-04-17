<?php $title = "Accueil"; ?>
<?php ob_start(); ?>

<section>
    <div class="container-fluid bg-white border-bottom border-dark mb-5">
        <div class="row">
            <div class="col p-5 d-flex flex-column text-center gap-3">
                <h1 class="color1 nord">Nos projets realises</h1>
                <span class="lex fw-bold fs-5">Food, art, sport ou encore tourisme, Dimension opère sur de nombreux secteurs d'activité ! <br> Découvrez (presque) tous nos projets réalisés à ce jour.</span>
            </div>
        </div>
    </div>
</section>
<section>
    <?php foreach ($projects as $project) { ?>
        
    <?php } ?>
</section>

<?php $content = ob_get_clean();?>
<?php require('../templates/layout.php') ?>