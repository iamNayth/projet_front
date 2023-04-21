<?php $title = "Accueil"; ?>
<?php ob_start(); ?>

<section>
    <div class="container-fluid bg-white border-bottom border-dark">
        <div class="row">
            <div class="col p-5 d-flex flex-column text-center gap-3">
                <h1 class="color1 nord">Nos projets realises</h1>
                <span class="lex fw-bold fs-5">Food, art, sport ou encore tourisme, Dimension opère sur de nombreux secteurs d'activité ! <br> Découvrez (presque) tous nos projets réalisés à ce jour.</span>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container p-5">
        <div class="row">
            <?php foreach ($projects as $project) { ?>
                <div class="col-3 d-flex justify-content-center">
                    <a href="index.php?page=project_view&<?=$project['id']?>" class="link-project"><div class="project-card position-relative h-100 w-auto">
                        <div class="project-img position-absolute"></div>
                        <span class="position-absolute nord text-light" style="bottom: 2em; left:50%; transform: translateX(-50%)"><?= $project['name'] ?></span>
                        <img class="img-fluid "src="<?= str_replace('../assets/', '../admin/assets/', $project['cover_picture'])?>" >
                    </div></a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php $content = ob_get_clean();?>
<?php require('../templates/layout.php') ?>