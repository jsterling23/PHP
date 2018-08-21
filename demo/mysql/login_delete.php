<?php include 'db.php';
      include 'functions.php';
?>

<?php 
    if(isset($_POST['delete'])){
        delete_user();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>

    <form action="login_delete.php" method="post">
        <label for="id">Select User to Delete</label>
        <select name="id" id="">
            <?php 
            show_data();
            ?>
        </select>

        <input type="submit" name="delete" value='delete' id="">


    </form>


    <br>
    <br>
    <br>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    show_users();
                ?>
            </tbody>




</body>
</html>