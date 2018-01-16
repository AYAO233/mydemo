<?php
    $info = array ('coffee', 'brown', 'caffeine');

    list($drink, $color, $power) = $info;
    echo "$drink is $color and $power makes it special.\n";

    list($drink, $power) = $info;
    echo "$drink has $power.\n";

    list( , , $power) = $info;
    echo "I need $power!\n";

    $contact = array("ID" => 1, "姓名" => "高某", "公司" => "A公司", "地址" => "北京市");
    for($i=0; $i<count($contact); $i++) {
        list($key, $value) = each($contact);
        echo "$key => $value";
    }
