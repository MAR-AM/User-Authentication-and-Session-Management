<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Nom d'utilisateur : <input type="text" name="user"><br><br>
        Mot de pass : <input type="password" name="pwd">
        <button type="submit" name="click"> Log in </button>
    </form>
</body>
</html>

<?php
    if(isset($_POST['click'])){
        session_start();
        $_SESSION['info']=$_POST['user'];
        header('location:session.php');
    }
    

?>