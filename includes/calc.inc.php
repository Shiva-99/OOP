<?php

include_once('autoloader.inc.php');

$oper = $_POST["oper"];
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

$calc = new Calc($oper, $num1, $num2);

try {
    echo $calc->calculator();
} catch (TypeError $e) {
    echo "Error!: " . $e->getMessage();
}

?>