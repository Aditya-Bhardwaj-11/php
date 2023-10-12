<?php
include 'data.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='' method='get'>
        <input type='text' placeholder='Enter Name Here' name='name'><br>
        <input type='text' placeholder='Enter Address Here' name='add'><br>
        <input type='number' placeholder='Enter Mobile Here' name='mob'><br>
        <!-- <input type='number' placeholder='Enter MATHS MARKS' name='math'><br>
        <input type='number' placeholder='Enter PHYSICS MARKS' name='phys'><br>
        <input type='number' placeholder='Enter COMPUTER MARKS' name='comp'><br> -->
        <input type='submit' value='Result' name='sbt'><br>
</form>
</body>
</html>

<?php

if(isset($_GET['sbt']))
{
    $name=$_REQUEST['name'];
    $add=$_REQUEST['add'];
    $mob=$_REQUEST['mob'];
    // $math=$_REQUEST['math'];
    // $phys=$_REQUEST['phys'];
    // $comp=$_REQUEST['comp'];
    $command="insert into student(name,address,mobile) values ('$name','$add','$mob');";
    //$marksAdd="insert into marks(Maths,Phys,Comp) values ('$math','$phys','$comp');";
    $res=mysqli_query($conn,$command);
    // $result=mysqli_query($conn,$marksAdd);
    if($res!=null || $result !=null)
    {
        echo 'Added Successfully';
    }
}



?>