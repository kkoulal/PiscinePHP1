<?php
function ft_is_sort($tab)
{
    $sort = $tab;
    sort($sort);
    $rsort = $tab;
    rsort($rsort);
    
    if ($sort == $tab || $rsort == $tab)
        return TRUE;
    else 
        return false;
    
   
}
?>