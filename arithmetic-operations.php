<?php
//Exercise #1
//Write a program to accept two integers and return true if the either one is 15 or if their sum or difference is 15.
//
function checkIfFifteen($num1, $num2) {
    if ($num1 == 15 || $num2 == 15) {
        return true;
    }

    if ($num1 + $num2 == 15 || abs($num1 - $num2) == 15) {
        return true;
    }
    return false;
}

// tests
$num1 = 10;
$num2 = 4;
echo checkIfFifteen($num1, $num2) ? "true" : "false";
echo "
"
?>
<?php
//Exercise #2
//Write a program called CheckOddEven which prints "Odd Number" if the int variable “number” is odd,
// or “Even Number” otherwise. The program shall always print “bye!” before exiting.
//
function checkOddEven($number) {
    if ($number % 2 == 0) {
        echo "Even Number ";
    } else {
        echo "Odd Number ";
    }
}

// tests
$number = 7;
checkOddEven($number);
echo "bye!";
echo "
"
?>
<?php
//Exercise #3
//Write a program to produce the sum of 1, 2, 3, ..., to 100.
// Store 1 and 100 in variables lower bound and upper bound, so that we can change their values easily.
// Also compute and display the average. The output shall look like:
//
$lowerBound = 1;
$upperBound = 100;


$sum = 0;
for ($i = $lowerBound; $i <= $upperBound; $i++) {
    $sum += $i;
}


$count = $upperBound - $lowerBound + 1;
$average = $sum / $count;


echo "The sum of numbers from $lowerBound to $upperBound is: $sum ";
echo "The average is: $average";
echo "
"
?>
<?php
//Exercise #4
//Write a program to compute the product of integers from 1 to 10 (i.e., 1×2×3×...×10), as an int.
// Take note that it is the same as factorial of N.
//
$product = 1;
for ($i = 1; $i <= 10; $i++) {
    $product *= $i;
}
echo "The product of integers from 1 to 10 is: $product";
echo "
"
?>
<?php
//Exercise #5
//Write a program that picks a random number from 1-100. Give the user a chance to guess it.
// If they get it right, tell them so. If their guess is higher than the number, say "Too high."
// If their guess is lower than the number, say "Too low." Then quit. (They don't get any more guesses for now.)
$randomNumber = rand(1, 100);

$userGuess = 55;


if ($userGuess == $randomNumber) {
    echo "Congratulations! You guessed the number $randomNumber correctly!";
} elseif ($userGuess < $randomNumber) {
    echo "Too low. I was thinking of $randomNumber.";
} else {
    echo "Too high.I was thinking of $randomNumber.";
}
?>