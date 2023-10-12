<?php

session_start();
session_unset();
session_destroy();
echo 'Successfully Logged Out';
header('location:login.php');




?>