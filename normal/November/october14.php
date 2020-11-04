<?php
$numbers = range (1,20);
$odd_number = [];
$even_number = [];
foreach ($numbers as $number) {
		if ($number%2==0){
				$even_number[]=$number;
		}elseif ($number%2!==0){
				$odd_number[]=$number;
		}else{
				throw new Exception("This is not number");
		}
}
function number($number1, $number2){

}

$response = number ();