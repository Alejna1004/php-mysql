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

    function fully_divisible($n){
        if(($n % 2) == 0){
            return "$n is fully divisible by 2";
        }else{
            return "$n is not fully divisible by 2";
        }
    }

    print_r(fully_divisible(4). "<br>");
    print_r(fully_divisible(35). "<br>");
    print_r(fully_divisible(14). "<br>");
    print_r(fully_divisible(15). "<br>");
?>