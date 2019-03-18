<?php
function jc($n)
{
    
}
jc(3);
echo "<hr/>";
function jc2($n)
{
    $sum=1;
    for ($i = 2;$i <= $n;$i++)
    {
        $sum = $sum * $i;
    }
    echo $sum;
}
jc2(6);