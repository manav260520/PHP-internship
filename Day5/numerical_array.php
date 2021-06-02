<?php
//method 1
$a[0] = 10;
$a[1] = 20;
$a[2] = 30.5;
$a[3] = "c";
$a[4] = "4";

//method 2
//dynamic array
$a[] = 10;
$a[] = 20;
$a[] = 30.5;
$a[] = "c";
$a[] = "4";

//method 3
$a = array(10,20,30.5,"c","c++");
//print array
echo $a[3];
//whole array
for($i=0;$i<count($a);$i++)
{
    echo "</br>".$a[$i];
}

$sum = array_sum($a);
echo "</br>".$sum;

echo "<pre>";
print_r($a);
echo "<pre>";

echo "<pre>";
var_dump($a);
echo "<pre>";