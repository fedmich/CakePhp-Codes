<?php

/*
Converts a CakePHP array into an associative array
*/

function cake_arr_to_assoc_tbl ($arr_cake) {
    if (! $arr_cake) {
        return array();
    }

    $arr_tbl2 = array();
    foreach ($arr_cake as $r_row) {
        $rtmp = array();
        foreach ($r_row as $rf) {
            $rtmp = array_merge($rtmp, $rf);
        }
        $arr_tbl2[] = $rtmp;
    }

    $akeys = array_keys($rtmp);

    $arr = array();
    foreach ($arr_tbl2 as $row) {
        $new_row = array();
        foreach ($akeys as $akey) {
            $new_row[$akey] = $row[$akey];
        }
        $arr[] = $new_row;
    }

    return $arr;
}