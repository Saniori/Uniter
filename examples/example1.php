<?php

require __DIR__."/../vendor/autoload.php";

$Cortege = new \S1ptex\Uniter\Cortege("Test Cortege");

$Cortege->add("One plus One is Two", function(\S1ptex\Uniter\Test $test){

    $test->assert(1+1 === 2); // Is necessarily method in test

});

$Cortege->execute();