<?php


function myCalculator($num01, $oper, $num02){
    $sum;

    switch($oper){
        case "add":
            $sum = $num01 + $num02;
        break;
        case "subtract":
            $sum = $num01 - $num02;
        break;
        default:
            $sum = "No no, Peter";
        break;        
    }

    return $sum;
}

$num01 = $_GET["num01"];
$oper = $_GET["oper"];
$num02 = $_GET["num02"];

echo "Value: " .myCalculator($num01, $oper, $num02);

?>