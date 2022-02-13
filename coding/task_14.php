<?php
    $a = 10;
    $b = 3;
    echo $a % $b, "\n";
    if ($a % $b == 0)
    {
        echo "Делится ", $a / $b, "\n";
    }
    else
    {
        echo "Делится с остатком ", $a % $b, "\n";
    }

    $st = pow(2, 10);
    echo $st, "\n";
    echo sqrt(245), "\n";

    $numbers = array(4, 2, 5, 19, 13, 0, 10);
    $sum = 0;
    foreach ($numbers as $num) {
        $sum += pow($num, 2);
    }
    echo sqrt($sum), "\n";

    echo round(sqrt(379), 0), "\n";
    echo round(sqrt(379), 1), "\n";
    echo round(sqrt(379), 2), "\n";

    echo ceil(sqrt(587)), "\n";
    echo floor(sqrt(587)), "\n";

    $numbers = array(4, 2, 5, 19, 13, 0, 10);
    echo min($numbers), "\n";
    echo max($numbers), "\n";

    echo rand(1, 100), "\n";
    $arr = [];
    for ($i = 0; $i < 10; $i ++)
    {
        $arr[] = rand();
    }
    print_r($arr);

    $a = readline();
    $b = readline();
    echo abs($a - $b);

    $before_numbers = array(1, 2, -1, -2, 3, -3);
    $after_numbers = [];
    foreach ($before_numbers as $num) {
        $after_numbers[] = abs($num);
    }
    print_r($after_numbers);
    echo "\n";

    $new_num = readline();
    $dividers = [];
    for ($i = 1; $i <= $new_num; $i++)
    {
        if ($new_num % $i == 0)
        {
            $dividers[] = $i;
        }
    }
    print_r($dividers);
    echo "\n";

    $our_numbers =  array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $new_numbers_more_10 = [];
    $sum = 0;
    foreach ($our_numbers as $item)
    {
        $sum += $item;
        if ($sum > 10)
        {
            $new_numbers_more_10[] = $item;
        }
    }
    print_r($new_numbers_more_10);

?>