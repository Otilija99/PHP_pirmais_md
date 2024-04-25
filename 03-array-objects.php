<?php
//Exercise 1
//Create a non-associative array with 3 integer values and display the total sum of them.
$numbers = array(10,
    20,
    30);

$totalSum = array_sum($numbers);

echo $totalSum;
echo "
"
?>
<?php
    //Exercise 2
//Given array
$person = [
    "name" => "John",
    "surname" => "Doe",
    "age" => 50
];
//Using dump method, dump out all 3 values.

var_dump($peron ["name"], $person["surname"], $person["age"]);
echo "
"
?>
<?php
//Exercise 3
//Given object
$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->age = 50;
//Using dump method, dump out all 3 values.
//
var_dump($person->name, $person->surname, $person->age);
echo "
"
?>
<?php
//Exercise 4
//Given array



$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];
//Program should display concatenated value of - Jane Doe 41

$concatenatedValue = $items[0][1]["name"] . " " . $items[0][1]["surname"] . " " . $items[0][1]["age"];
echo $concatenatedValue;
echo "
"
?>
<?php
//Exercise 5
//Given array
$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];
//Program should display concatenated value of - John & Jane Doe`s

$names = [];
foreach ($items[0] as $person) {
    $names[] = $person["name"] . " " . $person["surname"];
}
$concatenatedValue = implode(" & ", $names) . "'s";
echo $concatenatedValue;
    ?>