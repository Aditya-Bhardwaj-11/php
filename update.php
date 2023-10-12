<?php

include 'data.php';

if(isset($_REQUEST['sbt'])){
    
    $d=$_REQUEST['serial'];
    $a=$_POST['name'];
    $b=$_POST['address'];
    $c=$_POST['mobile'];

$cmd="UPDATE student set name='$a', address='$b', mobile='$c' where serial='$d';";
$result=mysqli_query($conn,$cmd);
}

if(isset($result))
    header( "location: fetchh.php");
?>