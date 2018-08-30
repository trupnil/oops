<?php

class a{
	public static $vari = "Some value";
	function callfunction(){
		echo self::$vari;
	}
}

class b extends a{
	function name(){
		echo parent::$vari;
	}
}
// echo a::$vari;
$objofa = new b;

$objofa->name(); 

?>
