<?php
// filter validate int
$v=$_REQUEST['num'];
if((Filter_var($v,FILTER_VALIDATE_INT,array('options'=>array("min_range"=>10,"max_range"=>100)))))
{
    echo 'Given inside range.<br>';
}
else
{
    echo 'outside rain.<br>';
}

// filter validate email
$var=$_REQUEST['num1'];
if((Filter_var($var,FILTER_VALIDATE_EMAIL)))
{
    echo 'Given inside range.<br>';
}
else
{
    echo 'outside rain.<br>';
}

// filter validate url
$var=$_REQUEST['num2'];
if((Filter_var($var,FILTER_VALIDATE_URL)))
{
    echo 'Given inside range.<br>';
}
else
{
    echo 'outside rain.<br>';
}

?>