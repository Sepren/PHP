<?php
    $quantity_x = array();
    $x = "x";
    for ($i = 0; $i < 10; $i++){
        $quantity_x[$i] = $x;
        $x .= "x";
    }
    print_r($quantity_x);
    echo "\n";

    function arrayFill($c, $num){
        $quantity = array();
        $i = 0;
        while ($num > 0){
            $quantity[$i++] = $c;
            $num--;
        }
        return $quantity;
    }
    print_r(arrayFill("x", 10));
    echo "\n";

    $quantity = array(array(1,2,3),array(4,5),array(6));
    $sum = 0;
    foreach ($quantity as $value) {
        foreach ($value as $value2){
            $sum += $value2;
        }
    }
    echo $sum, "\n";

    $sum = 1;
    for ($i = 0; $i < 3; $i++){
        for ($j = 0; $j < 3; $j++){
            $quantity[$i][$j] = $sum++;
        }
    }
    print_r($quantity);
    echo "\n";

    $quantity = array(2,5,3,9);
    $result = $quantity[0] * $quantity[1] + $quantity[2] * $quantity[3];
    echo $result, "\n";

    $user = [
        "surname" => "Кадыров",
        "name" => "Рамзан",
        "patronymic" => "Ахматович",
    ];
    foreach ($user as $value){
        echo $value, " ";
    }
    echo "\n";

    $date = [
        "year" => "1976",
        "month" => "10",
        "day" => "5",
    ];
    echo $date["year"], "-", $date["month"], "-", $date["day"];
    echo "\n";

    $arr = ['a', 'b', 'c', 'd', 'e'];
    echo count($arr), "\n";

    $arr = ['a', 'b', 'c', 'd', 'e'];
    echo end($arr), "\n";
    echo prev($arr), "\n";
    echo "\n";
}
