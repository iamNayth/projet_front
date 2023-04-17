<?php

require_once('../models/db.php');
require_once("../models/projects_managment.php");

function displayProjects() {
    $projects = getProjects();
    $msg = '';
    require_once('../templates/projects.php');
}

function validate_addProject() {
    $msg="";
    $msg = addProject();
    require_once('../templates/projects.php');
}