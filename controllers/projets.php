<?php

require_once('../admin/models/projects_managment.php');
require_once('../admin/models/db.php');

function displayProjects() {
    $projects = getProjects();
    require('../templates/projets.php');
}