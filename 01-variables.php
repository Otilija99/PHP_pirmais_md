<?php
//Exercise 1
//Create variable that prints out an integer 10, float 10.10, string "hello world"

$a = 10;
$b = 16.22;
$c = "hello world";
echo $a;
echo "
";
echo $b;
echo "
";
echo $c; // vnk atspoguļo rez (šis ir beigu variants!)
echo "
";
?>
<?php
//Exercise 2
//Dump the same values that should display both data type & its value. (Note, usage of var_dump)


var_dump($a, $b, $c);//parāda arī kas tas ir par variable(pārbaudēm)
echo "
";
?>
<?php
//Exercise 3
//Concatenate your name, surname and integer of your age.

$name = "Otīlija";
$surname = "Bidiņa";
$age = 25;

$me = $name . " " . $surname . " " . $age;
echo $me;
?>