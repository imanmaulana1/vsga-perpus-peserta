<?php

function _d($str)
{
    echo '<pre>';
    var_dump($str);
    echo '</pre>';
}


function pagination($num, $limit){
    if ($num > 0) {
        $offset = ($num * $limit) - $limit;
        return $offset;
    }
    return 0;
}