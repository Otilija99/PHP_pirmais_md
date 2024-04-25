<?php

//Exercise 1
//Given variables (int) 10, string "10" determine if they both are the same.
//
$int = 10;
$str = "10";

if ($int == $str) {
    echo "They are the same.";
} else {
    echo "They are not the same.";
}
echo "
"
?>
<?php
//Exercise 2
//Given variable (int) 50, determine if it's in the range of 1 and 100.
//
$number = 50;

if($number >=1 && $number <= 100){
    echo "The number is in the range of 1 and 100.";
}else{
    echo "The number is not in the range of 1 and 100.";
}
echo "
"
?>
<?php
//Exercise 3
//Given variables (string) "hello" create a condition that
//if the given value is "hello" then output "world".
//

$string = "hello";

if ($string == "hello") {
    echo "world";
}
echo "
"
?>
<?php
//Exercise 4
//By your choice, create condition with 3 checks.
//For example, if value is greater than X, less than Y and is an even number.
//

$value = 55;

if ($value > 50 && $value < 101 && $value % 2 === 0 ) {
    echo "The value is greater than 50, less than 101 and is an even number.";
}  else {
    echo "The value is not greater than 50, less than 101 and an even number.";
}echo "
"
?>
<?php
//Exercise 5
//Given variable (int) 50 create a condition that prints out "correct" if the variable is inside the range.
//Range should be stored within the 2 separated variables $y and $z.
//
$integer = 50;

$y=10;
$z=100;

if ($integer>=$y && $integer<=$z) {
    echo "correct";
} else {
    echo "incorrect";
}
echo "
"
?>
<?php
//Exercise 6
//Create a variable $plateNumber that stores your car plate number.
//Create a switch statement that prints out that it's your car in case of your number.
//

$plateNumber = "KK1123";

switch ($plateNumber) {
    case "KK1123":
        echo "This is your car!";
        break;
    default:
        echo "This is not your car.";
}
//Exercise 7
//Create a variable $number with integer by your choice.
//Create a switch statement that prints out text "low" if the value is under 50,
//"medium" if the case is higher than 50 but lower than 100, "high" if the value is >100.


$number = 75;

switch (true) {
    case ($number < 50):
        echo "low";
        break;
    case ($number >= 50 && $number < 100):
        echo "medium";
        break;
    case ($number >= 100):
        echo "high";
        break;
    default:
        echo "Invalid value";
}
?>
