<?php
require_once __DIR__ . '/vendor/autoload.php';

$worker = new App\Worker\TestWorker();
$worker->start(['label' => 'Test'], ['max_workers' => 3]);

