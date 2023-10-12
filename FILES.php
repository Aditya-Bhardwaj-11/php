
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <form action='' method="post" enctype="multipart/form-data">
        <input type='file' name='num'><br>
        <input type='submit' value='upload'>
</form>
 </body>
 </html>
<?php

if(isset($_FILES['num'])){
    $details= $_FILES['num'];
    echo "<pre>";
    print_r($details);
    echo "<pre>";
    $filename=$_FILES['num']['name'];
    $tempname=$_FILES['num']['tmp_name'];
    move_uploaded_file($tempname, "uploaded/" . $filename );

}
?>