<?php
$link = mysqli_connect("localhost",
    "root",
    "baby12",
    "ftflbatch2");

$query="INSERT INTO `ftflbatch2`.`ict_skill` (
`id` ,
`experience_cat` ,
`skill_description` ,
`extracurricular`
)
VALUES (NULL,
'".$_POST['experience_cat']."', '".$_POST['skill_description']."', '".$_POST['extracurricular']."'
);";



mysqli_query($link, $query);

header('location:list.php');

