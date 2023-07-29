<?php

namespace S1ptex\Uniter;

class Test
{

    private bool $passed = false;
    public float|string $leadTime;

    /**
     * @param string $name
     * @param $callback
     */
    public function __construct(private string $name, private $callback)
    {

        $start = microtime(true);

        $callback($this);

        $this->leadTime = microtime(true) - $start;

    }

    /**
     * @return bool
     */
    public function isPassed(): bool
    {

        return $this->passed;

    }

    /**
     * @return void
     */
    public function execute(): void
    {

        $formattedLeadTime = number_format($this->leadTime, 10, ".");

        if (!$this->isPassed()) {

            print("❌ Test \"{$this->name}\" .............................................. failed" . PHP_EOL);

            return;

        }

        print("✅ Test \"{$this->name}\" .............................................. passed in {$formattedLeadTime}s" . PHP_EOL);

    }

    /**
     * @param bool $statement
     * @return void
     */
    public function assert(bool $statement): void
    {

        $this->passed = $statement;

    }

}