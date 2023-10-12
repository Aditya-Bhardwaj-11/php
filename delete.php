<?php

include 'data.php';
$var=$_REQUEST['serial'];
$sql= "delete from student where serial='$var'";
$info=mysqli_query($conn,$sql);
header('Location:fetchh.php');



?>