<?php
// using built-in functions -----------------------------

//phpinfo();
echo phpversion() . '<br>';

$name = 'Anas Abu Farraj';
echo strtolower($name) . '<br>';
echo strtoupper($name) . '<br>';

$category = 'education';
echo ucfirst($category) . '<br>';
echo ucfirst(strtolower($category)) . '<br>';

$total_minutes = 547;
$minutes = $total_minutes % 60;
if (function_exists('intdiv')) {
	$hours = intdiv($total_minutes, 60);
	echo "Time: $hours:$minutes" . '<br>';
} else {
	$hours = floor($total_minutes / 60);
	echo "Time: $hours:$minutes" . '<br>';
}
echo '<br>' . 'Custom Functions:' . '<br>';

// Custom functions -------------------------------------
function goy_convertToTimer ($total_minutes) {
	$minutes = abs($total_minutes % 60);
	// Calculating Hours
	// Check if intdiv function exists:
	if (function_exists('intdiv')) {
		$hours = abs(intdiv($total_minutes, 60));
		// Add leading zero
		if ($hours < 10 && $minutes < 10) {
			$timer = "Time: 0$hours:0$minutes";
		} elseif ($hours < 10) {
			$timer = "Time: 0$hours:$minutes";
		} elseif ($minutes < 10) {
			$timer = "Time: $hours:0$minutes";
		} else {
			$timer = "Time: $hours:$minutes";
		}
	// If intdiv function not exists:
	} else {
		$hours = abs(floor($total_minutes / 60));
		// Add leading zero
		if ($hours < 10 && $minutes < 10) {
			$timer = "Time: 0$hours:0$minutes";
		} elseif ($hours < 10) {
			$timer = "Time: 0$hours:$minutes";
		} elseif ($minutes < 10) {
			$timer = "Time: $hours:0$minutes";
		} else {
			$timer = "Time: $hours:$minutes";
		}
	}
	return $timer;
}
echo goy_convertToTimer(546) . '<br>';
echo goy_convertToTimer(318) . '<br>';
echo goy_convertToTimer(-30) . '<br>';

echo '<br>' . '<br>';

// Passing value by reference
function doubleIt (&$number) {
	return $number *= 2;
}
$int = 30;
echo doubleIt($int) . '<br>';
echo doubleIt($int) . '<br>';
echo doubleIt($int) . '<br>';

$words = array('This', 'is', 'a', 'string');
$string = 'This is a string';

echo implode($words, ' ') . '<br>'; // Add ' ' space in between

explode($string, ' ', 5); // Split where ' ' is
echo $string[0];
echo $string[1];
echo $string[2];
echo $string[3];

echo '<br>' . '<br>';

$born_date = strtotime('May 10 ,1979');
echo date('l, F, j, Y, h:m a', $born_date);

echo '<br>' . '<br>';

$date_01 = new DateTime();
echo $date_01->format('g:ia, l, F, j, Y');


