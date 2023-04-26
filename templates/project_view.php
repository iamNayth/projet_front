<?php $title = "Détails"; ?>
<?php ob_start(); ?>



<section class="p-5">
    <?php foreach($projects as $project) { ?>
    <h1 class="nord text-center">Projet: <?= $project['name'] ?></h1>
    <p class="text-center lex"> <?= $project['conclusion'] ?> </p>

    <div class="container">
        <div class="row p-3">
            <div class="col-6">
                <img class="img-fluid "src="<?= str_replace('../assets/', '../admin/assets/', $project['first_picture'])?>" >
            </div>
            <div class="col-6 d-flex align-items-center">
                <p class="lex"> <?= $project['first_description'] ?> </p>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-6 d-flex align-items-center">
                <p class="text-end lex"> <?= $project['second_description'] ?> </p>
            </div>
            <div class="col-6">
                <img class="img-fluid "src="<?= str_replace('../assets/', '../admin/assets/', $project['second_picture'])?>" >
            </div>
        </div>
    </div>
    <?php } ?>
</section>



<?php $content = ob_get_clean();?>
<?php require('../templates/layout.php') ?>