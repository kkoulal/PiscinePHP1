#!/usr/bin/php
<?php
function ft_replace($var)
{
    $count = 1;
 while($count)
    $var=str_replace(' ','',$var,$count);
return($var);
}
if ($argc != 4)
{
    echo "Incorrect Parameters\n";
    return (0);
}

$dst1 = ft_replace($argv[1]);
$dst2 = ft_replace($argv[2]);
$dst3 = ft_replace($argv[3]);





if ($dst2 == '+') 
{
    echo ($dst1 + $dst3);
    echo "\n";
}
if ($dst2 == '-')
{
    echo ($dst1 - $dst3);
    echo "\n";
}
if ($dst2 == '*') 
{
    echo ($dst1 * $dst3);
    echo "\n";
}
if ($dst2 == '%') 
{
    echo ($dst1 % $dst3);
    echo "\n";
}
if ($dst2 == '/') 
{
    echo ($dst1 / $dst3);
    echo "\n";
}

?>