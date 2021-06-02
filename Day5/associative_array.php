<?php
//method 1
$a[0] = 10;
$a['c'] = "computer";
$a['php'] = "Web Development";
$a[10] = "ten";
$a[50] = 50.50;
//method 2
$a = array(
    0=>10,
    "c"=>"computer",
    "php" => 'Web Development',
     10 => "ten",
     50 =>50.50
);

echo "c for ".$a['c'];

foreach ($a as $value) {
    echo "</br>value is $value";
}

foreach ($a as $key => $value) {
    echo "</br>key is <b>$key</b> and value is <b>$value</b>";
}

echo "<pre>";
print_r($a);
echo "<pre>";

echo "<pre>";
var_dump($a);
echo "<pre>";