<?php include 'db.php';
      include 'functions.php';
?>

<?php 
    if(isset($_POST['update'])){
        login_update();
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

    <form action="login_update.php" method="post">
        <input type="text" name='username' placeholder='Enter Username'>
        <input type="password" name='password' placeholder='Enter Password'><br>

        <select name="id" id="">

        <?php 
        
        show_data();
        
        ?>

        </select>

        <input type="submit" name="update" value='update' id="">


    </form>



</body>
</html>