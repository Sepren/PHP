<?php

    function increaseEnthusiasm($string)
    {
        echo $string, "!";
        echo "\n";
    }

    function repeatThreeTimes($repeat)
    {
        $items = strval($repeat);
        increaseEnthusiasm($items * 3);
    }

    $str = readline();
    repeatThreeTimes($str);

    function cut($our_str, $save_str)
    {
        $result = "";
        for ($i = 0; $i < 10; $i ++)
        {
            $result .= $our_str[$i];
        }
        return $result;
    }
    $our_string = readline();
    $save_string = 10;
    echo cut($our_string, $save_string);
    echo "\n";

    function our_quantity(array $quantity, $count)
    {
        if ($count < sizeof($quantity))
        {
            echo $quantity[$count], " ";
            our_quantity($quantity, $count + 1);
        }
    }
    $array = [7, 1, 5, 4, 5, 6];
    our_quantity($array, 0);
    echo "\n";

    function digit_9($digit)
    {
        $sum = 0;
        while ($digit > 0)
        {
            $sum += $digit % 10;
            $digit /= 10;
        }
        if ($sum >= 10) return digit_9($sum);
        else return $sum;
    }
    $number = readline();
    echo digit_9($number);

?>