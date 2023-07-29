<?php

namespace S1ptex\Uniter;

class Cortege
{

    private array $tests = [];

    public function __construct(private string $name)
    {
    }

    public function add(string $name, callable $callback): void
    {

        $this->tests[] = new Test($name, $callback);

    }

    public function execute(): void
    {

        $countTests = count($this->tests);
        $countPassedTests = 0;
        $leadTime = 0;

        print("Cortege \"{$this->name}\" started: " . PHP_EOL);

        foreach ($this->tests as $test) {

            if ($test->isPassed()) {

                $countPassedTests += 1;

            }

            $leadTime += $test->lead_time;

            $test->execute();

        }

        $percent = $countPassedTests / $countTests * 100;
        $formattedLeadTime = number_format($leadTime, 10, ".");

        print("Passed $countPassedTests of $countTests | $percent%  in {$formattedLeadTime}s" . PHP_EOL);

    }

}