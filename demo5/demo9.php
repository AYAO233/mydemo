<?php
    function myFun($var) {
        if ($var % 2 == 0) {
            return true;
        }
    }

    function myFun1($value, $key) {
        echo "The key $key has the value $value <br>";
    }

    function myFun2($value, $key, $p) {
        echo "$key $p $value <br>";
    }

    function myFun3(&$value, $key) {
        $value = "web";
    }

    $array = array("a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>5);
    print_r(array_filter($array,"myFun"));
    echo "<br>";

    $lamp = array("a"=>"Linux","b"=>"Apache","c"=>"MySQL","d"=>"PHP");
    array_walk($lamp,"myFun1");

    array_walk($lamp, "myFun2", "has the value");

    array_walk($lamp, "myFun3");
    print_r($lamp);