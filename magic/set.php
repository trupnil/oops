<?php
class myclass
{
function __set($data,$value)
{
echo "__set is called<br>";
echo "Variable= ".$data." ";
echo "Value= ".$value."<br>";
}
}
$myclassobj = new myclass();
$myclassobj->x=1;
$myclassobj->y=40;
$myclassobj->z=50;
$myclassobj->a=60;
$myclassobj->b=70;
?>