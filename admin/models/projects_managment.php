<?php

function getProjects() 
{
    $database = dbConnect();
    $statement = $database->prepare("SELECT * FROM projects");
    $statement->execute();
    $projects = [];
    while (($row = $statement->fetch())) {
        $project = [
            'id' => $row['id'],
            'name' => $row['name'],
            'cover_picture' => $row['cover_picture'],
            'first_description' => $row['first_description'],
            'first_picture' => $row['first_picture'],
            'second_description' => $row['second_description'],
            'second_picture' => $row['second_picture'],
            'conclusion' => $row['conclusion'],
        ];
        $projects[] = $project;
    }
    return $projects;
}

function addProject() {
    $msg = "";
    $database = dbConnect();
    
    if ((!isset($_POST['name']) || empty($_POST['name']))
    || (!isset($_POST['first_description']) || empty($_POST['first_description']))       
    || (!isset($_POST['conclusion']) || empty($_POST['conclusion']))       
    || (!isset($_POST['second_description']) || empty($_POST['second_description']))) {       
        $msg = 'Il faut faut remplir tous les champs';
    } else {
        $name = strip_tags($_POST['name']);
        $first_description = strip_tags($_POST['first_description']);
        $second_description = strip_tags($_POST['second_description']);
        $conclusion = strip_tags($_POST['conclusion']);

        $sth = $database->prepare("INSERT INTO `projects`(`name`,`first_description`, `second_description`, `conclusion`) VALUES (:name,:first_description, :second_description, :conclusion)");
        $sth->bindParam(':name', $name, PDO::PARAM_STR);
        $sth->bindParam(':first_description', $first_description, PDO::PARAM_STR);
        $sth->bindParam(':second_description', $second_description, PDO::PARAM_STR);
        $sth->bindParam(':conclusion', $conclusion, PDO::PARAM_STR);
        $sth->execute();

        $msg = "Erreur juste avant traitement des images";

        if ((isset($_FILES['first_picture']) && $_FILES['first_picture']['error'] == 0)
        || (isset($_FILES['second_picture']) && $_FILES['second_picture']['error'] == 0)) {
            // Testons si le fichier n'est pas trop gros
            if ($_FILES['first_picture']['size'] <= 1000000) {
                // Testons si l'extension est autorisée
                $fileInfo = pathinfo($_FILES['first_picture']['name']);
                $extension = $fileInfo['extension'];
                $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png', 'jfif', 'webp', 'avif'];
                
                if (in_array($extension, $allowedExtensions)) {
                    // On peut valider le fichier et le stocker définitivement
                    $path = '../admin/assets/uploads/' . basename($_FILES['first_picture']['name']);
                    move_uploaded_file($_FILES['first_picture']['tmp_name'], $path);
                    
                    $msg = "S'arrete au deplacement";
                    
                    $sth = $database->prepare("INSERT INTO `projects`(`first_picture`) VALUES (:first_picture)");
                    $sth->bindParam(':first_picture', $path, PDO::PARAM_STR);
                    $sth->execute();
                }
            }
            if ($_FILES['second_picture']['size'] <= 1000000) {
                // Testons si l'extension est autorisée
                $fileInfo = pathinfo($_FILES['second_picture']['name']);
                $extension = $fileInfo['extension'];
                $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png', 'jfif', 'webp', 'avif'];
                
                if (in_array($extension, $allowedExtensions)) {
                    // On peut valider le fichier et le stocker définitivement
                    $path = '../admin/assets/uploads/' . basename($_FILES['second_picture']['name']);
                    move_uploaded_file($_FILES['second_picture']['tmp_name'], $path);
                    
                    $msg = "S'arrete au deplacement";
                    
                    $sth = $database->prepare("INSERT INTO `projects`(`second_picture`) VALUES (:second_picture)");
                    $sth->bindParam(':second_picture', $path, PDO::PARAM_STR);
                    $sth->execute();
                }
            }
            $msg= "L'ajout a bien été effectué !";
        } else {
            $msg = "Images non isset";
        }
        return $msg;
    } 
}