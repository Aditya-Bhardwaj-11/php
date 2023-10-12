<?php
include 'data.php';
$sql='select * from student';
$result=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table table-striped table-dark">
        <tr>
            <th>serial</th>
            <th>name</th>
            <th>address</th>
            <th>mobile</th>
            <th>time</th>
        </tr>
        <?php
            while($rs=mysqli_fetch_assoc($result))
            { 
                ?>
            <tr>
                <td><?php echo $rs['serial'];?></td>
                <td><?php echo $rs['name'];?></td>
                <td><?php echo $rs['address'];?></td>
                <td><?php echo $rs['mobile'];?></td>
                <td><?php echo $rs['time'];?></td>
                <td><a href='edit.php?serial=<?php echo $rs['serial'];?>' class="btn btn-outline-warning">Edit</a><a href='delete.php?serial= <?php echo $rs['serial'];?>' class="btn btn-outline-danger">Delete</a></td>
            </tr>
            
                <?php } ?>
    </table>

</body>
</html>