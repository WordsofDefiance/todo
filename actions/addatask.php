<?php
    
   ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);

   require('../includes/connection.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //everything is good
    } else {
        exit('Invalid Request');
    }

    $user_name    = trim(htmlspecialchars($_POST['username']));
    $task_name    = trim(htmlspecialchars($_POST['taskname']));
    $task_description = trim(htmlspecialchars($_POST['taskdescription']));    

    // test the database connection         

    try {
        $users = $myPDO->query("SELECT * FROM tasks");
        //echo "retrieved results";
    } catch (Exception $e) {
        echo "Unable to retrieve results";
        exit;
    }

    // First, check if the username exists

    $exists = $myPDO->prepare("Select * From users WHERE user_name=?");
    $exists->execute(array($user_name));
    $result = $exists->fetchAll();

    if ( sizeof($result) == 0 ) {
        die("User does not exist. Please try again.");
    }   

    $user_id = $result[0]['id'];

    // If the user exists, create the task

    $task_stmt = $myPDO->prepare("INSERT INTO tasks ( task_name, task_description, user_id, complete ) VALUES (?, ?, ?, ?)");  
    $task_stmt->execute(array($task_name, $task_description, $user_id, 0 ) ); 

    echo "it worked!";
