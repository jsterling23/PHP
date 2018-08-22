<?php include 'db.php' ?>
<?php include 'functions.php' ?>

<?php
// get_user();
update_user_record();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Current User</title>
</head>
<body>

    <header>
        <h2>Update</h2>
        <br>

        <a href="./create_user.php">Create User</a>
        <a href="./read_user.php">All Users</a>
        <a href="../index.php">Home</a>

        <br><hr>
    </header>

    <?php 
    get_user();
    ?>

</body>
</html>