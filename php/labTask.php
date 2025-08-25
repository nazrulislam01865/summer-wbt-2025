<?php

//LabTask 25-08-25

//Intrest Calculation

$principal = 1000; 
$rate = 5;         
$time = 2;         
$simpleInterest = ($principal * $rate * $time) / 100;
echo "Principal Amount: " . $principal . "<br>";
echo "Rate of Interest: " . $rate . "%<br>";
echo "Time (in years): " . $time . "<br>";
echo "Simple Interest = " . $simpleInterest . "<br><br>";

//Swapping two numbers without a temporary variable
$a = 5;
$b = 6;

echo "Before Swap: a = $a, b = $b<br>";
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "After Swap: a = $a, b = $b<br><br>";

//Leap Year Check

$year = 2001;

if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "$year is a Leap Year.<br><br>";
} else {
    echo "$year is not a Leap Year.<br><br>";
}

//Factorial Calculation
$num = 5;

$factorial = 1;

for ($i = 1; $i <= $num; $i++) {
    $factorial *= $i;
}

echo "Factorial of $num is $factorial<br><br>";


//Prime Number from 1 to 50
echo "Prime numbers between 1 and 50 :\n";

for ($num = 2; $num <= 50; $num++) {
    $isPrime = true;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
    if ($isPrime) {
        echo $num . " ";
    }
}

echo "<br><br>";

//Stars Shape
echo "Stars Shape:<br> <br>";
for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
//Number Shape
echo "<br><br>";
echo "Numbers Shape:<br><br>";
for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}
echo "<br><br>";
//Alphabet Shape
echo "Alphabets Shape:<br><br>";
$ch = 65; 
for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo chr($ch) . " ";
        
    }
    $ch++;
    echo "<br>";
}

?>