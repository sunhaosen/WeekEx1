<?php

function hw($str)
{
    $str2=strrev($str);
    if ($str == $str2)
    {
        echo "是回文字符串";
    }
    else
    {
        echo "不是回文字符串";
    }
}
hw('abba');