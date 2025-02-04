<?php
function VarInt(): void{
    $number = 150;

    echo "Integer: ", $number, "<br>";
}

function VarString(): void{
    $name = " Joe";

    echo  "Name: ",$name, "<br>";
}

function VarFloat(): void{
    $price = 149.99;

    echo  "Price: ", $price,"<br>","<br>";
}

function SumTwoVal(): void{
    $sum1 = 10;
    $sum2 = 20;
    $total = $sum1 + $sum2;
    $sub = $sum1 - $sum2;
    $div = $sum2 / $sum2;
    $mult = $sum1 * $sum2;

    echo  "Addition: ", $sum1, " + ", $sum2, " = ", $total, "<br>";
    echo  "Subtraction: ", $sum1, " - ", $sum2, " = ", $sub, "<br>";
    echo  "Division: ", $sum1, " % ", $sum2, " = ", $div, "<br>";
    echo  "Multiplication: ", $sum1, " x ", $sum2, " = ", $mult, "<br>","<br>" ;

}
function Operator(): void{
    echo "Operators", "<br>", "<br>";

    $num4 = 20;

    if($num4 > 40){
        echo "Hello World!", "<br>";
    }
    else{
        echo "World Hello", "<br>";
    }

    $day ="Monday";

    switch($day){
    case "Monday":
        echo "Weekday", '<br>';
        break;
    case "Friday":
        echo "Almost Weekend", '<br>';
        break;
    default:
        echo "Regular Holiday", '<br>';


    }
}

?>