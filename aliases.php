<?php

/*
 *
 *  PHP Alias
 *  Shorthand aliases for php functions.
 *
 *  Created By Jasper Alani.
 *  https://github.com/jasperalani/phpalias
 *
 */

/**
 * var_dump()
 * @param mixed $x
 */
function v($x ) {
    var_dump( $x );
}

/**
 * print_r()
 * @param array $x
 */
function r($x ) {
    print_r( $x );
}

/**
 * Echos $n amount of newlines or HTML <br> tags if $b is true
 * @param int $n
 * @param bool $b
 */
function s($n = 1, $b = false ) {
    for ( $i = 0; $i < $n; $i ++ ) {
        $w = $b ? '<br>' : "\n";
        echo $w;
    }
}