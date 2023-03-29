<?php

require_once('../models/db.php');
require_once("../models/admin_managment.php");

function displayAdmins() {
    $admins = getAdmin();
    $msg = '';
    if (isset($_POST['addAdmin'])) {
        $msg = addAdmin();
        require('../templates/admin.php');
    }

    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);
        $database = dbConnect();
        suppAdmin($id, $database);  
    }
    require("../templates/admin.php");
}
