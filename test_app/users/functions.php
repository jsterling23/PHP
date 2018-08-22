<?php include 'db.php'; ?>


<?php

// cleans inputs. Hashes passwords. inserts into database
function create_user(){
    GLOBAL $connection;
    if(isset($_POST['submit'])){

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if($password != $confirm_password){
            $error = "<h3> Passwords do not match... </h3>";
            echo $error;
            return;
        }
        // cleaning inputs
        $first_name = mysqli_real_escape_string($connection, $first_name);
        $last_name = mysqli_real_escape_string($connection, $last_name);
        $password = mysqli_real_escape_string($connection, $password);

        // hashing passwords
        $hashFormat = '$2y$10$';
        $salt = 'aiwldiucneghfisldqiwog';
        $hashF_and_salt = $hashFormat . $salt;
        $encrypted_password = crypt($password, $hashF_and_salt);
    

        $query = "INSERT INTO users (first_name, last_name, password) VALUES ('$first_name','$last_name','$encrypted_password')";

        $result = mysqli_query($connection, $query);
        if(!$result){
            die('This query was unsuccessful...' . mysqli_error($connection));
        } else {
            echo "<h1> User Added </h1>";
        }

    }

}

// displays all users while also providing options to update or delete the record.
function show_all_users(){
    GLOBAL $connection;

    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        echo "<tr>
                <td>$id</td>
                <td>$first_name</td>
                <td>$last_name</td>
                <td> 
                <form action='read_user.php' method='post'>
                    <input type='hidden' name='id' value='$id'>
                    <input type='submit' name='delete' value='DELETE'>
                </form>
                <form action='update_user.php' method='post'>
                    <input type='hidden' name='id' value='$id'>
                    <input type='submit' name='update' value='UPDATE'>
                </form>
                </td>
             </tr>";
    }

}


// grabs only one user when client request an update to single record. 
// Also echos a form to update that record specific.
function get_user(){
    GLOBAL $connection;
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $query = "SELECT * FROM users WHERE id = $id";
        $result = mysqli_query($connection, $query);
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];

            echo "User to update: " . $first_name . " " . $last_name . '<br><br><br>';

            echo "<form action='update_user.php' method='post'>
                    <input type='hidden' name='id' value='$id'>
                    <input type='text' name='first_name'>
                    <input type='text' name='last_name'>
                    <input type='submit' name='update_record' value='UPDATE'>
                </form>";
        }
    }

}

// when the form inside the "get_user()" function is submitted. It will execute this function to update
// current user record and redirect back to all users table
function update_user_record(){
    GLOBAL $connection;
    if(isset($_POST['update_record'])){
        $id = $_POST['id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];

        $query = "UPDATE users SET first_name = '$first_name', last_name = '$last_name' WHERE id = $id";
        $result = mysqli_query($connection, $query);

        if(!$result){
            die('Query Failed...' . mysqli_error($connection));
        } else {
            header('Location: /test_app/users/read_user.php', 308);
        }
    }
}

// easiest one to do
function delete_user(){
    GLOBAL $connection;
    if(isset($_POST['delete'])){
        $id = $_POST['id'];
        $query = "DELETE FROM users WHERE id = $id";
        $result = mysqli_query($connection, $query);
        if(!$result){
            die('Something went wrong...' . mysqli_error($connection));
        }
    }
}

?>
