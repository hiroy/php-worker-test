<?php
require_once __DIR__ . '/vendor/autoload.php';

main();
exit;

function main()
{
    $pp = new \Parallel\Prefork([
        'max_workers' => 2,
        'trap_signals' => [
            SIGHUP => SIGTERM,
            SIGTERM => SIGTERM,
        ],
    ]);

    while ($pp->signalReceived() !== SIGTERM) {
        if ($pp->start()) {
            continue;
        }

        work();

        $pp->finish();
    }

    $pp->waitAllChildren();
}

function work()
{
    echo 'Hello world at ' . date('Y-m-d H:i:s') . PHP_EOL;
    sleep(1);
}
