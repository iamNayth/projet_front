<?php
session_start();


try {
    //Controllers
    require_once('../controllers/homepage.php');
    require_once('../controllers/projects.php');
    require_once('../controllers/admin.php');
    
    if(!isset($_SESSION['id']) || !isset($_SESSION['identifier'])) {
        header('location:authentification.php');
    }

    if(isset($_GET['action']) && $_GET['action'] == "signout"){
        session_destroy();
        header('location: authentification.php');
    } 

    if( isset($_GET['page'])) {
        $page = strval($_GET['page']);
        if($page == "homepage"){
           displayHomepage();
        }
        elseif ($page == "projects") {
            displayProjects();
        }
        elseif ($page == "admin") {
            displayAdmins();
        }
        elseif ($page == "add_project") {
            validate_addProject();
        }
    } else {
         displayHomepage();
    }
    

 } catch (Exception $e) { //S'il y'a une erreur...
    $errorMessage = $e->getMessage();
 
    //require('templates/error.php');
 
 }