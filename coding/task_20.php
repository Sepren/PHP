<?php
    function max10($num1, $num2)
    {
        if ($num1 + $num2 > 10) {
            return true;
        }
        else
        {
            return false;
        }
    }
    $number1 = readline();
    $number2 = readline();
    max10($number1, $number2);

    function equal_nums($num1, $num2)
    {
        if ($num1 == $num2)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    $number1 = readline();
    $number2 = readline();
    equal_nums($number1, $number2);

    $test = 0;
    echo ($test == 0) ? 'Верно' : 'Неверно';

    $age = rand(0, 200);
    if ($age < 10) echo "{$age} is lower than 10";
    else if ($age > 99) echo "{$age} is higher than 99";
    else
    {
        $sum = 0;
        for ($i = 0; $i < strlen($age); $i++)
        {
            $sum += $age % 10;
            $age /= 10;
        }
        echo ($sum > 9) ? "sum is two-digit" : "sum is one-digit";
    }

    $quantity = array(3,5,3);
    $sum = 0;
    if (3 === count($quantity)) {
        foreach ($quantity as $value) {
            $sum += $value;
        }
        echo $sum, "\n";
    }
}
