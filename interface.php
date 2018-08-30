<?php
interface A
{
	function foo();
	function bar();
	// function name(){
	// 	echo "call";
	// }
}
// Implement the interface
// This will work
class B 
{
	function foo()
	{
		echo "In Foo method(class B)";
	}
	function bar()
	{
		echo "In Bar method(class B)";
	}
}
// This will not work
//Fatal error: Class C contains 1 abstract method 
//and must therefore be declared abstract or implement 
//the remaining methods (A::foo) 
class C implements A
{
	function bar()
	{
		echo "In Bar method(class c)";
	}
	function foo()
	{
		echo "In Bar method(class c)";
	}
}

$obj = new C; 
?>