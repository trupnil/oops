<?php

class ClassForAccess{
	public $PublicVari = "Public Variable";
	private $PrivateVari = "Private Variable";
	protected $ProtectedVari = "Protected Variable";
	
	function name(){
		$data = "some text";
		return $data;
	}
}

$ClassAccessObj = new ClassForAccess;
echo $ClassAccessObj->PublicVari;
echo $ClassAccessObj->PrivateVari;
echo $ClassAccessObj->ProtectedVari;
?>