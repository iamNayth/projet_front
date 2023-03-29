<?php $title = "Projects"; ?>
<?php ob_start(); ?>

<section class="p-5">
    <h1 class='nord mb-5'>PROJETS</h1>
    <table class="table mb-5" style="margin-top: 15px; width:100%">
    <thead class="table-dark">
        <tr>
            <th>Titre</th>
            <th>Affiche</th>
            <th>Résumé</th>
            <th class="col-2 text-center">Action</th>
        </tr>
    </thead>

    <tbody>
        <?php
        foreach($projects as $project){?>
        <tr class="table-striped">
            <td><?=$project['name']?></td>
            <td><img src="../<?=$project['cover_picture']?>"class='img-fluid' style="height: 100px;"></td>
            <td><?=$project['conclusion']?></td>
            <td><a href="index.php?page=project&id=<?php echo $project['id']?>" class="btn btn-danger w-100" onclick="return(confirm('Voulez-vous supprimer cette entrée ?'));">Supprimer</a></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</section>

<?php $content = ob_get_clean();?>
<?php require('../templates/layout.php') ?>