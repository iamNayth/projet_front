<?php


function displayAdmin() 
{
    $database = dbConnect();
    $statement = $database->prepare("SELECT * FROM admin");
    $statement->execute();
    $admins = [];
    while (($row = $statement->fetch())) {
        $admin = [
            'id' => $row['id'],
            'identifier' => $row['identifier'],
        ];
        $admins[] = $admin;
    }
    return $admins;

}

function addAdmin()
{
    $database = dbConnect();
    $msg= '';

    
    if ((!isset($_POST['identifier']) || empty($_POST['identifier']))
    || (!isset($_POST['password']) || empty($_POST['password'])))   {       
        echo 'Il faut faut remplir tous les champs';
    } else {
        $identifier = strip_tags($_POST['identifier']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $sth = $database->prepare("INSERT INTO `admin`(`identifier`, `password`) VALUES (:identifier,:password)");
        $sth->bindParam(':identifier', $identifier, PDO::PARAM_STR);
        $sth->bindParam(':password', $password, PDO::PARAM_STR);
        $sth->execute();
        $msg = "Votre nouvel admin à bien été ajouté.";
    }
    return $msg;
}    


function suppAdmin($id, $database)
{
    $database = dbConnect();

    $query = 'DELETE FROM admin WHERE id=:id'; 
    $req = $database->prepare($query);
    $req->bindValue(':id', $id, PDO::PARAM_INT);
    $req->execute();
}