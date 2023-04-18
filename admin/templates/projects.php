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
            <td><img src="<?=$project['cover_picture']?>"class='img-fluid' style="height: 100px;"></td>
            <td><?=$project['conclusion']?></td>
            <td><a href="index.php?page=project&id=<?php echo $project['id']?>" class="btn btn-danger w-100" onclick="return(confirm('Voulez-vous supprimer cette entrée ?'));">Supprimer</a></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</section>
<section class="p-5">
    <h1 class='nord mb-5'>AJOUTER UN PROJET</h1>
    <form action="index.php?page=add_project" method="post" enctype="multipart/form-data">
        <label class="form-label lex">Nom</label>
        <input type="text" class="form-control mb-3" placeholder="Nom" name="name">
        <label for="formFile" class="form-label lex">Image de couverture du projet</label>
        <input class="form-control mb-3" type="file" name="cover_picture">
        <label class="form-label">Premier paragraphe</label>
        <textarea type="textaera" class="form-control mb-3 lex" placeholder="Description" name="first_description"></textarea>
        <label for="formFile" class="form-label lex">Premiere image</label>
        <input class="form-control mb-3" type="file" name="first_picture">
        <label class="form-label lex">Second paragraphe</label>
        <textarea type="textaera" class="form-control mb-3 lex" placeholder="Description" name="second_description"></textarea>
        <label for="formFile" class="form-label lex">Deuxieme image</label>
        <input class="form-control mb-3" type="file" name="second_picture">
        <label class="form-label lex">Conclusion</label>
        <textarea type="textaera" class="form-control mb-3 lex" placeholder="Description" name="conclusion"></textarea>
        <button class="btn btn-primary" type="submit">Ajouter</button>
    </form>
</section>
<?= $msg ?>

<?php $content = ob_get_clean();?>
<?php require('../templates/layout.php') ?>