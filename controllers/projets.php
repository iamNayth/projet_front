<?php

require_once('../admin/models/projects_managment.php');

function displayProjects() {
    $projects = getProjects();
    require('../templates/projets.php');
}