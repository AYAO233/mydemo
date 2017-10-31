<?php

    $foo = 'Bob';
    $bar = &$foo;

    $bar = "My name is Tom.";
    echo $bar;
    echo $foo;

    $foo = "Your name is Bob.";
    echo $bar;
    echo $foo;

    unset($foo);
    $foo = "My name is Lily.";
    echo $bar;
    echo $foo;

?>