<?php 

$username = trim( $_GET['username'] );

$username = filter_var( $username, FILTER_SANITIZE_SPECIAL_CHARS);

//echo $username;

include '../includes/connection.php';

try {
    $username_join = $myPDO->query( "SELECT * FROM tasks INNER JOIN users ON tasks.user_id = users.ID WHERE users.user_name LIKE '$username'"  );
} catch (Exception $e) {
    echo "join failed!";
    echo $e->getMessage();
    exit;
} 

$results = $username_join->fetchAll(PDO::FETCH_ASSOC); ?>

<?php if (!empty($results) ) { ?>

    <h2>Hi, <?php echo $username . "!";?></h2>

    <?php 
    $counter = 1;
    $incompleteMessage = "This task is not yet complete!"; 
    $completeMessage = "Good job, this task is complete!";

    foreach( $results as $result) { ?>
        
                
        <div class="tasklist counter">
            <h2>Task <?php echo $counter; ?></h2>
        </div>
        <div class="tasklist task">
            <h3><?php echo $result['task_name']; ?></h3>
            <p><?php echo $result['task_description']; ?></p>
            <p><?php echo $result['complete'] == 0 ?  $incompleteMessage : $completeMessage; ?></p>
        </div>
        <?php $counter++; ?>
    <?php }
} else {
    echo "Your username does not exist or this user has no tasks!";
}
