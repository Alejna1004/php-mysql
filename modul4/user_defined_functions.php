<?php
    function helloWorld(){
        echo "Hello World";
    }

    helloWorld();

    function sum($x, $y){
        //return x + y;
        $z = $x + $y;
        return $z;
    }
    echo "Sum:" .sum(10, 30);

    function maximum($x, $y){
        if($x > $y){
            return $x;
        }else{
            return $y;
        }
    }
    $result = maximum(10, 15);
    echo "The max is:".$result;
?>