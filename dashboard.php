<?php
echo $_COOKIE["username"];
if(is_null($_COOKIE["username"])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <form action="" method=post>
        <button  type="submit" name="logout">logout</button>
        
</form>
    <?php
    if(isset($_POST["logout"])){
        setcookie("username","");
        setcookie("password","");
        setcookie("status","");
        header("location:login.php");
        }
    ?>
</body>
</html>