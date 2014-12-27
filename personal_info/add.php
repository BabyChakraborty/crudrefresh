<?php
$fullname = $_POST['fullname'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$nationality = $_POST['nationality'];
$nationalid = $_POST['nationalid'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$track = $_POST['track'];

$link = mysqli_connect("localhost","root","baby12","ftflbatch2");

$query = "INSERT INTO `ftflbatch2`.`personal_info` (`fullname`, `fname`, `mname`, `nationality`, `nationalid`, `email`, `mobile`,`track`)
VALUES ('$fullname', '$fname', '$mname', '$nationality', '$nationalid', '$email', '$mobile', '$track')";

mysqli_query($link, $query);
header('location:list.php');
