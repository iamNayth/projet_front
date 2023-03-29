<?php

function dbConnect()
{
    $database = new PDO('mysql:host=localhost;dbname=dimension;charset=utf8', 'root', '');
    return $database;
}