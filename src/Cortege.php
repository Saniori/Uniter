<?php

namespace S1ptex\Uniter;

class Cortege{

    private array $tests = array();

    public function __construct(private string $name){}
    public function add(string $name, Callable $callback){

        $this->tests[] = new Test($name, $callback);

    }
    public function execute(){

        $count_tests = count($this->tests);
        $count_passed_tests = 0;
        $lead_time = 0;

        print("Кортеж \"{$this->name}\" запущен: ".PHP_EOL);

        foreach($this->tests as $test){

            if($test->isPassed()){

                $count_passed_tests += 1;

            }

            $lead_time += $test->lead_time;

            $test->execute();

        }
        
        $count_failed_tests = $count_tests - $count_passed_tests;
        $percent = $count_passed_tests / $count_tests * 100;
        $formatted_lead_time = number_format($lead_time, 10, ".");

        print("Пройдено $count_passed_tests из $count_tests | $percent%  за {$formatted_lead_time}s".PHP_EOL);
        
    }

}