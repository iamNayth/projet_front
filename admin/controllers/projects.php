<?php

require_once('../models/db.php');
require_once("../models/projects_managment.php");

function displayProjects() {
    $projects = getProjects();
    $msg = '';
    require('../templates/projects.php');
}