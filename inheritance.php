<?php
class ClassName {
	function sumfunction($a,$b){
		$sum = $a+$b;
		return $sum;
	}
}
class newclass extends ClassName{
	function averagefunction(){
		$sumresponse = $this->sumfunction();
		return $avg = $sumresponse/2;
	}
}
$newclassobj = new newclass;
if (isset($_REQUEST['Agerave'])) {
	$val1 = $_REQUEST['Value1'];
	$val2 = $_REQUEST['Value1'];
	echo $newclassobj->sumfunction($val1,$val2);	
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Average</title>
</head>
<body>
	<form method="POST">
<table>
	<tr>
		<td><label>Value 1 </label></td>
		<td><input type="text" name="Value1"></td>
	</tr>	
	<tr>
		<td><label>Value 2 </label></td>
		<td><input type="text" name="Value2"></td>
	</tr>
	<tr>
		<td><input type="submit" name="Agerave" value="Agerave"></td>
	</tr>
</table>
</form>
</body>
</html>

