<?php

//INDEX ARRAY

$array=array(1,'String',true,33.2);
print_r($array);
echo '<br>';

//Print Methods
//M1: foreach

$ar=[22,55,66,778,543];
foreach($ar as $val)
{
    echo $val.'<br>';
}

//M2: html tag pre

echo'<pre>';
print_r($ar);
echo '</pre>';


//M3: For

for($x=0;$x<=4;$x++)
{
    echo $ar[$x].'<br>';
}



//Associative Array

//INPUT TYPE


//M!: Directly and Seperately

$a['Name']="Aditya";
$a['Age']="22";
$a['Address']="Noida";
$a[77]="House Address";

//M2: In one line using array and parentheses

$b=array('Name'=>'Amish' , 'Age'=>23 , 'Address'=>'Delhi' , 69=>'House Address');

//M3: Using Square Bracket

$c=     [
            'Name'=>'Sahil' , 
            'Age'=>24 , 
            'Address'=>'Delhi' , 
            '7/22'=>'House Address'
        ];

print_r($c);
  
//M4: Using HTML Tables

echo '<table border="1" cellspacing="0">';
foreach($a as $key=>$value)
{
    echo '<td>'.$value.'</td>';
}
echo '</table>';


//MULTIDIMESNSIONAL ARRAY
$array= [
            [1,2,3,4,5],
            [1.2,2.2,3.3,4.4,5.5],
            ['11','22','33','44','55']
];

//Printing

//M1 : foreach

foreach($array as $val)
{
    foreach($val as $value)
    { 
        echo $value . '<br>';
    }
}

//M2 : foreach for

foreach($array as $val)
{
    for($x=0;$x<5;$x++)
    { 
        echo $val[$x] . '<br>';
    }
}

//Table

$arr=[
    ['Abhishek','Noida','1234'],
    ['Aditya','Ald','0707'],
    ['Amish','Delhi','6969'],
    ['Sahil','Patna','1111']
];

echo '<table border="1" cellspacing="0" cellpadding="10">';
echo '<tr>';
echo '<td>' . 'Name' . '</td>';
echo '<td>'.'Address'.'</td>';
echo '<td>'.'Mobile'.'</td>';
echo '</tr>';

foreach($arr as $myval)
{
    echo '<tr>';
    foreach($myval as $value)
    {
        echo '<td>'.$value.'</td>';
    }
    echo '</tr>';
}
echo '</table>';

//<ultidimensional Associative array
$maa= [
    'Player'=>[1,2,3,4,5],
    'Name'=>[1.2,2.2,3.3,4.4,5.5],
    'Age'=>['11','22','33','44','55']
];

//Printing

foreach($maa as $key=>$val)
{
    foreach($val as $value)
    { 
        echo $value . '<br>';
    }
}
?>

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