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
		// echo $this->PrivateVari; // cant be access out side of class 
		echo $this->ProtectedVari;
	}	
	function InNewClassForExtends(){
		echo "This Message From NewClassForExtends <br>";
	}
}

class NewClassForExtendsMultilevel extends NewClassForExtends{
	function NameFucntionInNewClass(){
		echo $this->PublicVari;
		// echo $this->PrivateVari;
		echo $this->ProtectedVari;
	}
	function InNewClassForExtendsMulitiLevel(){
		echo "This Message From InNewClassForExtendsMulitiLevel<br>";
	}	
}

$ClassAccessObj = new NewClassForExtendsMultilevel;
echo "================ Parent CLass Function Calling ================<br>";
$ClassAccessObj->name();
echo "================ Child CLass Function Calling ================<br>";

$ClassAccessObj->NameFucntionInNewClass();
$ClassAccessObj->name();
echo "================ Child CLass Function Calling ================<br>";
$ClassAccessObj->InNewClassForExtends();
$ClassAccessObj->name();
echo "================ Child CLass Function Calling ================<br>";
$ClassAccessObj->InNewClassForExtendsMulitiLevel();

?>