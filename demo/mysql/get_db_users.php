<?php include 'db.php';
    
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die('Query Failed' . mysqli_error());
    }


?>