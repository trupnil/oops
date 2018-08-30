<?php
final class finalkeyword{
 // finalize class cant be inheritade
	public $vari ="Some Message";
	// public $vari ="Some new value"; // can't redeclare data member in class 
	public function name(){
		// $a = 5;
		// $a = 15;
		// $a = 5464;//override
		// echo $a;
		echo $this->vari;
	}
	// public function name($data){ // cn't redeclare with the same name function within same class 
	// 	echo $this->vari;
	// }
	public  function newfunc(){
		echo "this is from finalkeword class<br>"; 
	}
}
class b extends finalkeyword{
	public function name(){
		// echo $this->vari;
		echo "echo from class b<br>";
	}	
}
$objoffinalclass = new b;
$objoffinalclass->name();
$objoffinalclass->newfunc();
?>