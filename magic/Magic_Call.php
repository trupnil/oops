<?php
class Caller {

//    Private $x = array(1, 2, 3);

    public function __call($m, $a) {
        print "Method $m called:\n";
        echo "<pre>";
        print_r($a);
        echo "<br>";
//        return $this->x;
    }
//    public function FunctionName($name,$fname){
////        echo ;
//        echo $fname.' '.$name;
//    }
    
}

$foo = new Caller ();
$a = $foo->test(1, "2", 3.4, true);
$a = $foo->test123(1, "2", 3.4, true);
$a = $foo->Payal(1, "name", "yes", true);
$a = $foo->FunctionName('payal', "My name is");
//var_dump($a);
?>