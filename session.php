<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>heeeeeeeeeeeyyy</h1>
    <?php
    session_start();
    echo $_SESSION['info'];
    if(isset($_POST))
    ?><br><br>
    <a href="deconexion.php" onclick="return confirm('voulez vous vraiment deconecter !')">clicker ici pour deconecter</a>

</body>
</html>