<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "baby12",
    "ftflbatch2");

$query = "DELETE FROM `ftflbatch2`.`ict_skill` WHERE `ict_skill`.`id` = $id";

mysqli_query($link, $query);

header('location:list.php');
