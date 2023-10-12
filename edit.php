<?php

include 'data.php';
$serial=$_REQUEST['serial'];
$cmd="select serial,name,address,mobile,time from student where serial='$serial';";
$result=mysqli_query($conn,$cmd);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='update.php' method='post' >
        <?php while($rs=mysqli_fetch_assoc($result)) { ?>
            
            <input type='text' value=<?php echo $rs['serial']; ?> name='serial' readonly >
            <input type='text' value=<?php echo $rs['name'];?> name='name'>
            <input type='text' value=<?php echo $rs['address'];?> name='address'>
            <input type='number' value=<?php echo $rs['mobile'];?> name='mobile'>
            <input type='text' value=<?php echo $rs['time'];?> name='time' disabled><br>
            <input type='submit' value='update' name='sbt'>
            <?php } ?>
</form>
</body>
</html>