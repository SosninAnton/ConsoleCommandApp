<?php
require __DIR__ . '/vendor/autoload.php';

$argvCommandHandler = new \SosninAnton\ConsoleCommand\ArgvCommandHandler();

$command = new \App\Command\ShowParamsCommand();

echo $argvCommandHandler->registerCommand($command)->handle().PHP_EOL;