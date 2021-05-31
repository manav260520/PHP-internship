<?php
$sum=0;
for($i=1;$i<=200;$i++)
{
    if($i%2==0)
    {
        $sum+=$i;
        echo "</br>$i  $sum";
    }
}