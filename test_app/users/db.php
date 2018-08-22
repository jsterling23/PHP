<?php

$connection = mysqli_connect('localhost','root','','test_app');
if(!$connection){
    die("Database not connected..." . mysqli_error($connection));
}

?>