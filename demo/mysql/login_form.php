<?php include 'functions.php';

if(isset($_POST['submit'])){
    create_user();
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

    <form action="login_form.php" method="post">
        <input type="text" name='username' placeholder='Enter Username'>
        <input type="password" name='password' placeholder='Enter Password'><br>
        <input type="submit" name="submit" id="">


    </form>



</body>
</html>