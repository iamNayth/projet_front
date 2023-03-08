<?php

try {
    //Controllers
    require_once('../controllers/homepage.php');
    require_once('../controllers/agence.php');
    

    if( isset($_GET['page'])) {
        $page = strval($_GET['page']);
        if($page == "homepage"){
           displayHomepage();
        }
        elseif ($page == "agence") {
            displayAgence();
        }
    } else {
         displayHomepage();
    }
    

 } catch (Exception $e) { //S'il y'a une erreur...
    $errorMessage = $e->getMessage();
 
    //require('templates/error.php');
 
 }