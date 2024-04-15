<?php
$user="root";
$mdp="";
$db="teste_de_connexion";
//$server="localhost"

//$port = NULL; Default must be NULL to use default port
/* $mysqli = new mysqli('127.0.0.1', $user, $mdp, $db );

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
echo '<p>Connection OK '. $mysqli->host_info.'</p>';
echo '<p>Server '.$mysqli->server_info.'</p>';
echo '<p>Initial charset: '.$mysqli->character_set_name().'</p>';

$mysqli->close(); */

$link=mysqli_connect('127.0.0.1', $user, $mdp, $db);

if($link)
{


    //echo'connexion établie';
}else
{
    die(mysqli_connect_error());
}





?>