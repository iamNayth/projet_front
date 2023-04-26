<?php 

require_once('../admin/models/projects_managment.php');
require_once('../admin/models/db.php');

function displayProjectView() {    
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $projects = recupProjectById($id);
    }
    require('../templates/project_view.php'); 
}