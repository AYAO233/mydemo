<?php
    $lamp = array("OS"=>"Linux","WebServer"=>"Apache","Database"=>"MySQL","Language"=>"PHP");
    print_r(array_flip($lamp));
    echo "<br>";
    $trans = array("a"=>1,"b"=>1,"c"=>2);
    print_r(array_flip($trans));
    echo "<br>";
    print_r(array_reverse($lamp));
    echo "<br>";
    echo count($lamp);
    echo "<br>";
    $web = array(
        'lamp' => array('Linux','Apache','MySQL','PHP'),
        'j2cc' => array('Unix','Tomcat','Oracle','JSP')
    );
    echo count($web,1);
    echo "<br>";
    echo count($web);
    echo "<br>";

    $array = array(1, "php", 1, "mysql", "php");
    $newArray = array_count_values($array);
    print_r($newArray);
    echo "<br>";

    $a = array("a"=>"php","b"=>"mysql","c"=>"php");
    print_r(array_unique($a));
    echo "<br>";