<?php

class myget {
    function __get($data) {
//note: variable 'x' is not defined in myclass
       // $data = "<br>__get is called<br>undefined attributes ";
       return $data;
    }
}
$mygetobj = new myget();
echo $mygetobj->sadmfc;
