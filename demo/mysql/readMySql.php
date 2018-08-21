<?php include 'get_db_users.php';

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
    
    <form action="forms.php" method="post">
        <input type="text" name='username' placeholder='Enter Username'>
        <input type="password" name='password' placeholder='Enter Password'><br>

        <select name="" id="">
        <?php


            while($users = mysqli_fetch_assoc($result)){
                $id = $users['id'];
                echo "<option value='$id'>$id</option>";

            }
        
        ?>
        </select>

        <input type="submit" name="submit" id="">


    </form>


</body>
</html>