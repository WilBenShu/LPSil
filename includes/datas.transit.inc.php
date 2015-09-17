<?php

/**
 * Echange le lignes et colonnes d'une table; 
 **/

function rearrange($arr) {
    $new=null;
    foreach($arr as $key => $all) {
        foreach($all as $i => $val) {
            $new[$i][$key] = $val;
        }
    }
    return $new;
}

?>
