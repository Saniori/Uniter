<?php

require "../vendor/autoload.php";

$Case = new S1ptex\Uniter\Cortege("Calculator test");

$Case->add("One plus one is two", function($test){

    $test->assert(1+1 === 2);

});

$Case->execute();