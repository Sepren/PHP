<?php

    $quantity = [1, 2, 3, 4, 5];
    echo array_sum($quantity) / sizeof($quantity), "\n";

    $first_num = 1;
    $last_num = 100;
    echo ($first_num + $last_num) / 2 * ($last_num - $first_num + 1), "\n";

    $quantity = [1, 4, 9, 16, 25, 36];
    var_dump(array_map('sqrt', $quantity));

    $letters = range('a', 'z');
    $numbers = range(1, 26);
    $quantity = array_combine($letters, $numbers);
    var_dump($quantity);

    $string = '1234567890';
    $quantity = str_split($string, 2);
    echo array_sum($quantity);