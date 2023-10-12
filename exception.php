<?php


class custom extends Exception{
    function message()
    {
        $msg=$this->getmessage();
        return $msg;
    }
}
try{
    $x=3;
    if($x==1)
    {
        throw new custom("Custom exception found");
    }
    else if($x==2)
    {
        throw new exception("Normal Exception");
    }
    echo $x;
}
catch(custom $e)
{
    echo $e->message();
}
catch(Exception $e)
{
    echo $e->getmessage();
}
?>