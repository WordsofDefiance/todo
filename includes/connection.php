<?php

try {
    $myPDO = new PDO('mysql:host=127.0.0.1;dbname=todo', 'david', 'david');
    $myPDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e)  {
    echo "unable to connect!<br>";
    echo $e->getMessage();
    exit;
}

//echo "connected!";
//echo "<br>";

try {
    $users = $myPDO->query("SELECT * FROM users");
    //echo "retrieved results";
} catch (Exception $e) {
    echo "Unable to retrieve results";
    exit;
}

//var_dump($users->fetchAll(PDO::FETCH_ASSOC));

try {
    $tasks = $myPDO->query("SELECT * FROM tasks");
    //echo "retrieved results";
} catch (Exception $e) {
    echo "Unable to retrieve results";
    exit;
}

//echo "<br>";
//var_dump($tasks->fetchALL(PDO::FETCH_ASSOC));
