<?php

$user=$_GET['num'];
session_start();
$_SESSION['username']=$user;
echo "Login Success  $user";


?>