<?php

echo 'Hello, world!';
echo '<br><br>';

// Variables ---------------------------------------
$firstName = 'Anas';
$number = 42.99;

echo $firstName, ' ', $number;
echo '<br>';

echo $firstName, '<br><br>', $number;
echo '<br>';

echo "I love $number";
echo '<br>';

$book = '"Hitsh\'s Guide to the Galaxy"';
echo $book;
echo '<br><br>';

// Concatenation ----------------------------------
$tag = $firstName . ' has read ' . $book;
echo $tag;
echo '<br>';

echo "$firstName has reed $book";
echo '<br><br>';

// Combining --------------------------------------
$firstName = 'Anas';
$lastname = 'Abu Farraj';
$emailAddress = 'anas.r.abufarraj@gmail.com';
$id = '23486';
$newline = "\r\n\r\n";

$message = "First Name: $firstName $newline";
$message .= "Last Name: $lastname $newline";
$message .= "Email: $emailAddress $newline";
$message .= "id: $id";
echo $message;
echo '<br><br>';

// heredoc ----------------------------------------
$title = "The Hitchhiker's Guide to the Galaxy";
$author = 'Douglas Adams';
$android = 'Marvin';
$brain_size = 'the size of a planet';

$escaped = "In \"$title\" by $author, $android the \"paranoid 
android\" complains that he's asked to do menial tasks, 
even though he's got \"a brain $brain_size.\"";

echo $escaped;
echo '<br>';

$paragraph = <<< EOT
In "$title" by $author, $android the "paranoid 
android" complains that he's asked to do menial tasks, 
even though he's got "a brain $brain_size."
EOT;

echo $paragraph;
echo '<br><br>';

// Indexed Arrays -------------------------------
$characters = array('John', 'Paula', 'Peter');
print_r($characters);
echo '<br>';

// Shorthand:
$characters = ['John', 'Paula', 'Peter'];
print_r($characters);
echo '<br>';

// Adding items:
$characters [] = 'Sarah';
$characters [] = 'Douglas';
print_r($characters);
echo '<br>';

// Echo item:
echo $characters[4];
echo '<br><br>';

// Associate Arrays -----------------------------
$description = ['Earth' => 'Living planet',
                 'Sun' => 'Light source planet',
				 'Venus' => 'Health planet'
];
print_r($description);
echo '<br>';

echo $description['Earth'];
echo '<br>';
echo $description['Sun'];
echo '<br>';
echo $description['Venus'];
echo '<br><br>';

// Adding items:
$description ['Mars'] = 'Anger planet';
print_r($description);
echo '<br>';

echo "Print me $characters[4]";
echo '<br>';
echo $description['Earth'];
echo '<br><br>';

// If Statement ----------------------------------
$username = 'Arthur Dent';
$password = true;

// using {}, you can use either "else if" or "elseif"
if ($username == 'Arthur Dent' && $password == true) {
	echo "Welcome back, $username!";
} else if ($username == 'Arthur Dent' && $password == false ) {
	echo "Password is incorrect";
} else if ($username != 'Arthur Dent' && $password == true ) {
	echo "Username is incorrect";
} else { // default condition
	echo 'Incorrect username and password';
}
echo '<br><br>';

// using : syntax, you should use "elseif"
if ($username == 'Arthur Dent' && $password == true) :
	echo "Welcome back, $username!";
elseif ($username == 'Arthur Dent' && $password == false ) :
	echo "Password is incorrect";
elseif ($username != 'Arthur Dent' && $password == true ) :
	echo "Username is incorrect";
else: // default condition
	echo 'Incorrect username and password';
endif;
echo '<br><br>';

// Switch Statement ----------------------------
$browser = 'Chrome';

switch ($browser) {
	case 'Chrome':
		echo 'Recommended browser';
		break;
	case 'Opera':
	case 'Safari':
	case 'IE':
		echo "$browser is not recommended!";
		break;
	default:
		echo 'Unknown browser in use';
}
echo '<br><br>';

$budget = 75;
$total = 66;
$handling = 2.99;

switch ($total) {
	case $total <= $budget:
		echo "Order is within budget, it's $" . ($total + $handling);
		break;
	case $total > $budget;
		echo "Order is over budget, it's $" . ($total + $handling);
		break;
	default:
		echo $total;
}
echo '<br><br>';

// or
switch ($total) {
	case $total <= $budget:
		echo "Order is within budget, it's $" . $total += $handling;
		break;
	case $total > $budget;
		echo "Order is over budget, it's $" . $total += $handling;
		break;
	default:
		echo $total;
}
echo '<br><br>';

// The ternary operator ------------------------------
$answer = -1.0;

$foo = ($answer >= 0) ? 'It\'s positive number' : 'It\'s negative number';
echo $foo;
echo '<br><br>';

if ($answer >= 0) :
	echo 'It\'s positive number';
else :
	echo 'It\'s negative number';
endif;
echo '<br><br>';

$unit_price = 20;

$wholesale_price = $unit_price ? "Price is $unit_price": "Price is 25";
echo $wholesale_price;
// if $unit_price is not 0, $wholesale_price is as $unit_price
// else $wholesale_price is 25
echo '<br><br>';

// same as
if ($unit_price) {
	echo "Price is $unit_price";
} else {
	echo "Price is 25";
}
echo '<br><br>';

// Assigning a default value (php 7) ------------------
$ws_price = $price ?? $another_null ?? 25;
echo $ws_price;

// Solution for all versions of php
if (isset($price)) {
	$ws_price = $price;
} else {
	$ws_price = 25;
}
echo '<br><br>';

// If we don't want to use the value if it's nul or false:
$price = 0;
if (isset($price) && $price) {
	$ws_price = $price;
} else {
	$ws_price = 25;
}
echo $ws_price;
echo '<br><br>';

// Arithmetic -----------------------------------------
$a = 2;
$b = 8;
$c = 3.14;

echo $a ** $b . '<br>';
echo pow($a, $b) . '<br>';
echo ceil($c) . '<br>';
echo floor($c) . '<br>';
echo round($c) . '<br>';
echo sin($c) . '<br>';
echo cos($c) . '<br>';
echo tan($c) . '<br>';
echo log($c) . '<br>';
echo exp($c) . '<br>';
echo min($a, $b) . '<br>';
echo max($a, $b) . '<br>';

$total = 5;
$total += 4; // $total = $total + 4;
echo $total . '<br>';
echo '<br>';

$number = 5;
$number++;
++$number;
echo $number . '<br>'; // 7

$result = $number++ * 2; // 7 * 2 + 1 = 14 increasing happen after
echo $result . '<br>';

$result = $number++ * 2; // 1 + 7 * 2 = 16 increasing happen before
echo $result . '<br>';

$total_minutes = 318;
$minutes = $total_minutes % 60;
//$hours = floor($total_minutes / 60);

// using the php 7 new function "Integer division":
$hours = intdiv($total_minutes, 60); // 318 / 60 = 5.3 => 5
echo "It takes $hours hours and $minutes minutes to finish." .'<br>';

// While Loop -----------------------------------------
$i = 0;
while ($i < 16) :
	$i++;
	if ($i % 2) {
		continue; // do not break
	}
	echo $i . '<br>';
endwhile;
echo '<br>' . '<br>';

$var = 0;
do {
	$var++;
	if ($var % 2) {
		continue;
	}
	echo $var . '<br>';
} while ($var < 16);

echo '<br>' . '<br>';

for ($i = 0; ($var % 2) && $i < 16; $i++) :
	echo $i . '<br>';
endfor;