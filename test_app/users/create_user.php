<?php include 'db.php'; ?>
<?php include 'functions.php'; ?>

<?php 
create_user();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
</head>
<body>
    <h2>Create User</h2><br>

    <a href="./create_user.php">Create User</a>
    <a href="./read_user.php">All Users</a>
    <a href="./update_user.php">Update User</a>
    <a href="./delete_user.php">Delete User</a>
    <a href="../index.php">Home</a>

    <br><hr>

    <form action="create_user.php" method='post'>
        <label for="first_name">First Name: </label>
        <input type="text" name='first_name'> <br><br>

        <label for="last_name">Last Name: </label>
        <input type="text" name='last_name'> <br><br>

        <label for="password">Password: </label>
        <input type="password" name='password'> <br><br>

        <label for="confirm_password">Confirm Password: </label>
        <input type="password" name='confirm_password'> <br><br>

        <input type="submit" name='submit' value='Create User'>
    </form>

    <br>

</body>
</html>