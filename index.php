<?php session_start();
$_SESSION['nom']="";
$_SESSION['prenom']="";
$_SESSION['age']="";
$_SESSION['mdp']="";
setcookie('login', '', time() + 365*24*3600, null, null, false, true); 
setcookie('mdp', '', time() + 365*24*3600, null, null, false, true); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    echo $_SERVER['REMOTE_ADDR']; 
    echo $_SERVER['SERVER_NAME'];
    echo $_SESSION['nom'];
    echo $_SESSION['prenom'];
    echo $_SESSION['age'];
    ?>

<form action="user.php" method="post">
Votre nom : <input type="text" name="nom">
<br />
Votre prenom : <input type="text" name="prenom">
<br />
Votre age : <input type="text" name="age">
<br />
<input type="submit" value="Connexion">
</form>


<form action="user.php" method="post">
Votre login : <input type="text" name="login">
<br />
Votre mdp : <input type="password" name="mdp">
<br />
<input type="submit" value="Connexion">
</form>

    <a href="user.php">visit this page</a>
    
    <p>
    Hé ! Je me souviens de toi !<br />
    Tu t'appelles <?php echo $_COOKIE['pseudo']; ?> et tu viens de <?php echo $_COOKIE['pays']; ?> c'est bien ça ?
</p>
</html>