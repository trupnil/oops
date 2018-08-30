<?php

class ClassForAccess{
	public $PublicVari = "Public Variable<br>";
	private $PrivateVari = "Private Variable<br>";
	protected $ProtectedVari = "Protected Variable<br>";
	function name(){
		echo $this->PublicVari;
		echo $this->PrivateVari;
		echo $this->ProtectedVari;
	}
}
class NewClassForExtends extends ClassForAccess{
	function NameFucntionInNewClass(){
		echo $this->PublicVari;
		echo $this->PrivateVari;
		echo $this->ProtectedVari;
	}	
}

$ClassAccessObj = new NewClassForExtends;
echo "================ Parent CLass Function Calling ================";
$ClassAccessObj->name();
echo "================ Child CLass Function Calling ================";

$ClassAccessObj->NameFucntionInNewClass();

?>