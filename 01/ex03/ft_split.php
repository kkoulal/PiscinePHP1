<?php
function ft_split($array)
{
    $str = explode(" ",$array);
    $str = array_filter($str);
    sort($str);
    return($str);
}
?>  





