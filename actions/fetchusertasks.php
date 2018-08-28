<?php 

$username = trim( $_GET['username'] );

$username = filter_var( $username, FILTER_SANITIZE_SPECIAL_CHARS);

echo $username;


include '../includes/connection.php';

var_dump($myPDO);

try {
    $username_join = $myPDO->query( "SELECT * FROM tasks INNER JOIN users ON tasks.user_id = users.ID WHERE users.user_name LIKE 'david'"  );
} catch (Exception $e) {
    echo "join failed!";
    echo $e->getMessage();
    exit;
} 

$results = $username_join->fetchAll(PDO::FETCH_ASSOC); ?>


<pre>
<?php print_r($results); ?>
</pre>
