<html>
<body>
<?php

    $name        = trim( $_POST['name'] );
    $task        = trim( $_POST['task'] );
    $description = trim ( $_POST['description'] );
    
    $name        =  filter_var( $name, FILTER_SANITIZE_SPECIAL_CHARS);
    $task        =  filter_var( $task, FILTER_SANITIZE_SPECIAL_CHARS);
    $description =  filter_var( $description, FILTER_SANITIZE_SPECIAL_CHARS);
?>
<h2>Hello! Your name is <?php echo $name; ?></h2>
<h3>Your task is <?php echo $task; ?></h3>
<p><strong>Description: </strong><?php echo $description; ?></p>
</body>
</html>


