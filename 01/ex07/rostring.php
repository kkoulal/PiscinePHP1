#!/usr/bin/php
<?php
 function ft_strlen($dest)
 {
     $i = 0;
     while ($dest[$i] != '')
     {
        $i++;
     }
     return($i);
 }
$nb = 1;
    $str = explode(" ",$argv[1]);
    $myarray = array_filter($str,'ft_strlen');
    
    $nbagv = count($myarray);
    $tab = array_values($myarray);                                   
    while ($nbagv - 1 > 0)
    {
        echo $tab[$nb++];
        echo " ";
        $nbagv -= 1; 
    }
     echo $tab[0];
     echo "\n";
?>