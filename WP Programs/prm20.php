<?php
function divide($numerator,$denominator){
	if($denominator==0){
		throw new Exception("Cannot divide be zero.");
	}
	return $numerator/$denominator;
}
function checkDateFormat($date,$format = 'Y-m-d'){
	$dateTime=DateTime::createFromFormat($format,$date);
	if(!$dateTime || $dateTime->format($format) !=$date){
		throw new Exception("Invalid date format.");
	}
	echo "The date" .$date ." is valid.<br>";
	return true;
}
try{
	echo divide(10,2) ."<br>";
	echo divide(10,0) ."<br>";
}catch(Exception $e){
	echo "Division error: " .$e->getMessage(). "<br>";
}
try{
	checkDateFormat("2023-03-10");
	checkDateFormat("10/03/2023");
}catch(Exception $e){
	echo "Date Error:" .$e->getMessage() . "<br>";
}
?>
	