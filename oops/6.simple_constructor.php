<?php
class a
{
	public function __construct()
	{
	echo "In base class constructor....";
	}
}
class b extends a
{
	public function b()
	{
		parent::__construct();
		echo "in subclass construct";
	}
}
$b= new b();
?>