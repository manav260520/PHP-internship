<html>
<head>
<title>Odd Even Demo</title>
</head>
<body>
<?php
for($i=1;$i<=10;$i++)
{
    $num=$i;
    echo "</br>";
    if($num%2==0)
    {
        echo "$num is even.";
    }
    else
    {
        echo "$num is odd.";
    }
}