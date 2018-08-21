<?php 

$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
if(!$connection){
    die("Connection error: " . mysqli_error());
}

?>