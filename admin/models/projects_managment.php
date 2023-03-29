<?php

function getProjects() 
{
    $database = dbConnect();
    $statement = $database->prepare("SELECT * FROM projects");
    $statement->execute();
    $projects = [];
    while (($row = $statement->fetch())) {
        $project = [
            'id' => $row['id'],
            'name' => $row['name'],
            'cover_picture' => $row['cover_picture'],
            'first_description' => $row['first_description'],
            'first_picture' => $row['first_picture'],
            'second_description' => $row['second_description'],
            'second_picture' => $row['second_picture'],
            'conclusion' => $row['conclusion'],
        ];
        $projects[] = $project;
    }
    return $projects;
}