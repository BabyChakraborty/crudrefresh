<?php

$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "baby12",
    "ftflbatch2");
$query = "DELETE FROM `ftflbatch2`.`contact_information` WHERE `contact_information`.`id` = $id";
mysqli_query($link, $query);
header('location:list.php');
