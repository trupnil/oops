<?php

Class tops {

    protected $var = "Tops Techno";

    public function __toString() {
        return __CLASS__.' : '.$this->var;
//        return  "ths is the name";
    }
}
$ob = new tops();
echo $ob;
?> 