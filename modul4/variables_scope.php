<?php
//$x = 5; //global variable
//function localVariable(){
//    $y = 10; //local variable
    //echo $x
//    echo $y;
//}

//echo $y
//localVariable();

//Example 2
//$x = 5;
//$y = 7;

//function sum(){
//    global $x, $y;
//    $y = $x + $y;
//}
//sum();
//echo $y;

function callCounter(){
    $count = 0;
    $count++;
    echo "The value of count variable is: $count <br>";
}
callCounter();
callCounter();
callCounter();
?>