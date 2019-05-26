<?php
    
   require('../includes/connection.php');


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //everything is good
    } else {
        exit('Invalid Request');
    }


    $post = $_POST;

    $userName    = trim(htmlspecialchars($_POST['username']));
    $taskName    = trim(htmlspecialchars($_POST['taskname']));
    $description = trim(htmlspecialchars($_POST['taskdescription']));    

    echo $userName . "<br>";
    echo $taskName . "<br>";
    echo $description . "<br>"; 

        


