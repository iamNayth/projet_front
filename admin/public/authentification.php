<?php 
session_start();

require_once('../models/db.php');

$database = dbConnect();
$msg ='';

if (isset($_POST['submit'])){
    if (isset($_POST['identifier']) & isset($_POST['password'])){
        try {
            $sth = $database->prepare("SELECT * FROM admin WHERE identifier=:identifier");
            $sth->bindParam(':identifier', $_POST['identifier']);
            $sth->execute();
            $row = $sth->fetch(PDO::FETCH_ASSOC);
            $hash = $row['password'];
            if (password_verify($_POST['password'], $hash)){
                $_SESSION['id']   = $row['id'];
                $_SESSION['identifier'] = $row['identifier'];
                header('Location: index.php');
                
            }else{
                $msg = "Mauvais mot de passe.";
                
            }
        } catch (PDOException $e){
            print "Erreur !: " . $e->getMessage() . "<br/>";
        }
    }else{
        echo "oula !";
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="../assets/style.css" rel="stylesheet" />
</head>
    <body class="h-100">
    <main class="h-100">
        <div class="header finisher-header h-100 w-100">        
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col d-flex align-items-center justify-content-center">
                        <div class="bg-white rounded-4 p-5 w-50">
                            <h1 class="mb-5">Connexion</h1>
                            <form action="" method="post">
                                <input class="form-control"type="text" name="identifier" placeholder="Identifiant"><br>
                                <input class="form-control"type="password" name="password" placeholder="Mot de passe"><br>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <button class="btn btn-primary text-center" type="submit" name="submit">Se connecter</button>
                                </div>
                                <?= $msg ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="../assets/finisher-header.es5.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        new FinisherHeader({
        "count": 6,
        "size": {
            "min": 1300,
            "max": 1500,
            "pulse": 0
        },
        "speed": {
            "x": {
            "min": 0.1,
            "max": 0.6
            },
            "y": {
            "min": 0.1,
            "max": 0.6
            }
        },
        "colors": {
            "background": "#000000",
            "particles": [
            "#949494",
            "#484848",
            "#242424",
            "#000000",
            "#424242"
            ]
        },
        "blending": "overlay",
        "opacity": {
            "center": 0.5,
            "edge": 0.05
        },
        "skew": 0,
        "shapes": [
            "c"
        ]
        });
    </script>
</body>
</html>