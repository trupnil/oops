<?php 
class FinalClass{
    function name(){
        echo "call this is the new function<br>";
    }
    final function nameNew(){
        echo "Name new function form Final Class<br>";
    }
}
class NewFinalClass extends FinalClass{
    function nameNew(){
        echo "Name New function Form New Final Class<br>";
    }
}
$obj = new NewFinalClass;
$obj->nameNew();
$obj->name();
?>