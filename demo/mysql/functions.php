<?php include 'db.php'; ?>


<?php

function create_user(){
    GLOBAL $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "INSERT INTO users(username, password) VALUES ('$username','$password')";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die('Query Failed' . mysqli_error($connection));
    }

}



function show_data(){
    GLOBAL $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die('Query Failed' . mysqli_error());
    }
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $username = $row['username'];
        $password = $row['password'];
        echo "<option value='$id'>$id</option>";
    }
}

function show_users(){
    GLOBAL $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die('Query Failed' . mysqli_error($connection));
    }
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $username = $row['username'];
        $password = $row['password'];

        echo "<tr>
                <td>$id</td>
                <td>$username</td>
                <td>$password</td>
              </tr>";

    }
}


function login_update(){
    GLOBAL $connection;
    $id = $_POST['id'];
    echo $id;
    
    $query = "UPDATE users SET username = '$username', password = '$password' WHERE id = $id";


    $result = mysqli_query($connection, $query);
    if(!$result){
        die('QUERY FAILED' . mysqli_error($connection));
    }
}


function delete_user(){
    GLOBAL $connection;
    $id = $_POST['id'];
    $query = "DELETE FROM users WHERE id = $id";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die('QUERY FAIL' . mysqli_error($connection));
    }
}


?>