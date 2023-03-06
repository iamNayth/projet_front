<?php $title = "Accueil"; ?>
<?php ob_start(); ?>
    Hello

<?php $content = ob_get_clean();?>
<?php require('../templates/layout.php') ?>