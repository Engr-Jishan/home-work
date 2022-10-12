<?php
// Swap two variables. Example: a = 20, b = 30; Output: a = 30, b = 20;

$a = 20;
$b = 30;
$result = $a;
$a = $b;
$b = $result;
echo "After swapping:<br>";
echo "a=".$a." b=".$b;

// Create a program to detect if a number is Odd or Even

$number = 666;
if ($number %2==0) {
    echo "Even";
}
else{
    echo "Odd";
}

// Switch Case

$age = 15;
switch ($age) {
    case 18;
        echo "You are Adult";
        break;
    case ($age >= 16);
        echo "Ummm you are teenage!";
        break;
    default:
        echo "Baby!";
}
?>