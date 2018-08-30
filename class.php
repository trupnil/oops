<?php
class ClassName{
	public $vari = "Yes<br>";
	function myfunction(){
		echo $this->vari;
		echo $name = "TOPS";
		echo "hello<br>";
	}	
	function myfunction1(){
		echo $this->vari;
		echo $name = "TOPS Techno";
		echo "hello<br>";
	}
	function myfunction2(){
		echo $this->vari;
		echo $name = "TOPS";
		echo "hello<br>";
	}
}
$classobj = new ClassName;
$classobj->myfunction(); //run
$classobj->myfunction1(); //run
$classobj->myfunction2(); //run
// myfunction(); // fatal error
// myfunction(); // fatal error
?>