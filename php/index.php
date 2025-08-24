<?php

$heigth = 10;
$width = 5;
echo "The heigth of the rectangle is: " . $heigth;
echo "<br>";
echo "The width of the rectangle is: " . $width;
echo "<br>";
echo "<br>";

$area = $heigth * $width;
echo "The area of the rectangle is: " . $area;
echo "<br>";
echo "<br>";

$perimeter = 2 * ($heigth + $width);
echo "Ther Perimeter of the rectangle is: " . $perimeter;
echo "<br> <br>";

echo "VAT Calculation:";
echo "<br>";
$price = 1000;
$vat = 0.15;
echo "The price without VAT is: " . $price;
echo "<br>";
echo "The VAT rate is: " . ($vat * 100) . "%";
echo "<br>";
$priceWithVat = $price * (1 + $vat);
echo "The price with VAT is: " . $priceWithVat;
echo "<br><br>";

echo "EVEN/ODD<br>";
$number = 7;
echo "The number is: " . $number;
echo "<br>";
if ($number % 2 == 0) {
    echo "$number is Even<br><br>";
} else {
    echo "$number is Odd<br><br>";
}

echo "Largest Number<br>";
$a = 15;
$b = 25;
$c = 10;
echo "The numbers are: $a, $b, $c<br>";
if ($a >= $b && $a >= $c) {
    echo "$a is the largest<br><br>";
} elseif ($b >= $a && $b >= $c) {
    echo "$b is the largest<br><br>";
} else {
    echo "$c is the largest<br><br>";
}

echo "Odd Numbers from 10 to 100<br>";
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
echo "<br><br>";

echo "Search an Element in Array<br>";
$numbers = array(10, 20, 30, 40, 50);
$search = 30;

$found = false;
$i = 0;
echo "Array elements: ";
for ($j = 0; $j < count($numbers); $j++) {
    echo $numbers[$j] . " ";
}
echo "<br>";

while ($i < count($numbers)) {
    if ($numbers[$i] == $search) {
        $found = true;
        break;
    }
    $i++;
}
if ($found) {
    echo "Element $search found in the array.<br>";
} else {
    echo "Element $search not found in the array.<br>";
}

echo "Stars Shape:<br> <br>";
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

echo "<br> <br>";

echo "Numbers Shape:<br><br>";
for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}

echo "<br><br>";

echo "Alphabets Shape:<br><br>";
$ch = 65; 
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo chr($ch) . " ";
        $ch++;
    }
    echo "<br>";
}
echo "<br><br>";

?>