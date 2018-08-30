<?php
class setclass
{
    public $secret="tops tech";
}
$obj=new setclass();
//var_dump($obj);
echo "<pre>";
print_r($obj) ;
unset($obj->secret);
?>