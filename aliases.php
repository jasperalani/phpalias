<?php

/*
 * Aliases
 */

/**
 * var_dump()
 * @param $x
 */
function v($x ) {
    var_dump( $x );
}

function r( $x ) {
    print_r( $x );
}

function s( $n = 1, $b = false ) {
    for ( $i = 0; $i < $n; $i ++ ) {
        $w = $b ? '<br>' : "\n";
        echo $w;
    }
}