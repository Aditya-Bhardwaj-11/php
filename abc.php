<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='1' cellspacing='0' cellpadding='10>
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Mobile</th>
</tr>
<?php
foreach($arr as $key=>$val)
{
    ?>  <tr>
    <?php
    foreach($val as $oval)
    {
        ?>
        <td><?php echo $oval; ?> </td>
        <?php } ?>
    </tr>
    <?php } ?>
</body>
</html>