<html>
<head>
<title>Fibonacci Series</title>
</head>
<body>
<?php
$i = 1;
$j = 1;
echo "<b>Fibonacci Series</b></br>";
echo "$i";
for($count=1;$count<=100;$count++)
{
    $k=$i+$j;
    $i=$j;
    $j=$k;
    echo "</br>$k";
}
?>
</body>
</html>