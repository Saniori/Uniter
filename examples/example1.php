<?php

require "../vendor/autoload.php";

$Cortege = new \S1ptex\Uniter\Cortege("Супер-пупер набор тестов");

$Cortege->add("Один плюс один равно два", function(\S1ptex\Uniter\Test $test){

    $test->assert(1+1 === 2);
  
});

$Cortege->execute();