<?php

namespace S1ptex\Uniter;

class Test{

    private bool $passed = false;
    private bool $asserted = false;
    public float | string $lead_time;
    public function __construct(private string $name, private $callback){

        $start = microtime(true);

        $callback($this);

        $this->lead_time = microtime(true) - $start;

    }
    public function isPassed() : bool{

        return $this->passed;

    }
    public function execute(){

        $formatted_lead_time = number_format($this->lead_time, 10, ".");

        if(!$this->isPassed()){

            print("❌ Тест \"{$this->name}\" .............................................. не пройден".PHP_EOL);

            return;

        }

        print("✅ Тест \"{$this->name}\" .............................................. пройден за {$formatted_lead_time}s".PHP_EOL);

    }
    public function assert(bool $statement){

        $this->passed = $statement;
        $this->asserted = true;

    }

}