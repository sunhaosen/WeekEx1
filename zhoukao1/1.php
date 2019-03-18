<?php
function sum1()
{
    $arr=range(1,100);
    echo array_sum($arr);
}
sum1();
echo "<hr/>";
function sum2()
{
    $sum = 0;
    for ($i = 1;$i <= 100;$i++)
    {
        $sum += $i;
    }
    echo $sum;
}
sum2();
echo "<hr/>";
function sum3()
{
    echo (1+100)*100/2;
}
sum3();