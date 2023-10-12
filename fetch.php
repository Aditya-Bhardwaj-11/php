<?php
include 'data.php';
$sql='select * from student';
$result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1 cellspacing = 0>
        <tr>
            <th>serial</th>
            <th>name</th>
            <th>address</th>
            <th>mobile</th>
            <th>time</th>
        </tr>
        <?php
            foreach($result as $val)
            {?>
            <tr>
                <?php foreach($val as $myval) { ?>
                    <td><?php echo $myval;?>
                </td>
                <?php } ?>
                </tr>
                <?php } ?>
    </table>

</body>
</html>