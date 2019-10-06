#!/usr/bin/php
<?php

function ft_strlen($dst)
{
    $i = 0;
    while ($dst[$i] != '')
    {
        $i++;
    }
    return ($i);
}
if ($argc < 2)
    return (0);
array_shift($argv);
$nb = 0;
$nbr = 0;
$str = implode(" ",$argv);
$str = trim($str);
$myarray = explode(" ", $str);
$array = array_filter($myarray, 'ft_strlen');
sort($array,SORT_STRING);
$nbr1 = count($array);
while ($nb < $nbr1)
{
    echo $array[$nbr++];
    $nb++;
    echo "\n";
}
?>