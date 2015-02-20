<?php
namespace App\Worker;

use Clover\Worker;

class TestWorker extends Worker
{
    public function main(array $args = [])
    {
        $label = isset($args['label']) ? $args['label'] : 'Hello world';
        echo "{$label} at " . date('Y-m-d H:i:s') . PHP_EOL;
        sleep(1);
    }
}
