<?php session_start();
	$i =	$_SESSION['nom'] = $_POST['nom'];
    $j =	$_SESSION['prenom'] = $_POST['prenom'];
    $v =	$_SESSION['age'] = $_POST['age'];
    $test = $_COOKIE['login'] =  $_POST['login'];
    $pass = $_COOKIE['mdp'] =  $_POST['mdp'];
    
    echo $i;
    echo $j;
    echo $v;
    echo $test;
    echo $pass;

?>