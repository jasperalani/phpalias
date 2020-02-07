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

use function var_dump as v;
use function print_r as r;

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