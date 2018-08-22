<?php include 'db.php'; ?>
<?php include 'functions.php'; ?>
<?php delete_user(); ?>
<?php get_user(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Current Users</title>
</head>
<body>

    <h2>Current Users Table</h2>
    <br>

    <a href="./create_user.php">Create User</a>
    <a href="./read_user.php">All Users</a>
    <a href="../index.php">Home</a>

    <br><hr>

    <table>
        <thead>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php show_all_users(); ?>
        </tbody>
    </table>
    
</body>
</html>