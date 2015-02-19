<?php
namespace App\Worker;

use Clover\Worker;

class TestWorker extends Worker
{
    public function main()
    {
        echo 'Hello world at ' . date('Y-m-d H:i:s') . PHP_EOL;
        sleep(1);
    }
}