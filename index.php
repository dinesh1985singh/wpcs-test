<?php
include('./inc/const.php');

function calculateSum() {
    $arg = func_get_args();
    $arg_cnt = func_num_args();

    if($arg_cnt> 1) {
        return array_sum($arg);
    }else if( $arg_cnt = 1) {
        return func_get_args()[0];
    }else {
        return 0;
    }
}

$a = 5;
$a = 6;

$sum = calculateSum($a,$b);