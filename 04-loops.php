<?php
//Exercise 1
//Create an array with integers (up to 10) and print them out using foreach loop.
//
$numbers=range(1,10);
foreach ($numbers as $number) {
    echo $number . " ";
}echo "
"
?>
<?php
//Exercise 2
//Create an array with integers (up to 10) and print them out using for loop.
//
$numbers = range(1, 10);
for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . " ";
}
echo "
"
?>
<?php
//Exercise 3
//Given variable $x = 1 while $x is lower than 10, print out text "codelex".
// (Note: To avoid infinite looping, after each print increase the variable $x by 1)
//
$x=1;
while ($x < 10) {
    echo "codelex". " ";
    $x++;
}
echo "
"
?>
<?php
//Exercise 4
//Create a non associative array with integers and print out only integers that divides by 3 without any left.
//
$numbers = array(3, 4, 6, 9, 11, 12, 15, 16, 17, 18, 21);
foreach ($numbers as $number) {
    if ($number % 3 == 0) {
        echo $number . " ";
    }
}
echo "
"
?>
<?php
//Exercise 5
//Create an associative array with objects of multiple persons.
//Each person should have a name, surname, age and birthday.
//Using loop (by your choice) print out every persons personal data.
$persons = array(
    array(
        "name" => "Jānis",
        "surname" => "Egle",
        "age" => 42,
        "birthday" => "27.02.1982"
    ),
    array(
        "name" => "Agate",
        "surname" => "Brokole",
        "age" => 25,
        "birthday" => "12.02.1999."
    ),
    array(
        "name" => "Jekaterina",
        "surname" => "Jonsone",
        "age" => 2,
        "birthday" => "25.04.2022."
    )
);


foreach ($persons as $person) {
    echo $person["name"] . " ";
    echo $person["surname"] . " ";
    echo $person["age"] . " ";
    echo $person["birthday"] . "  ";
}
?>
?>