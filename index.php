<?php
require __DIR__ . '/vendor/autoload.php';

ini_set('error_reporting', '30719');
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
$consoleColor = new JakubOnderka\PhpConsoleColor\ConsoleColor();

$functionArray = [
    'calculateHomeWorkSum',
    'Nfq\Akademija\NotTyped\calculateHomeWorkSum',
    'Nfq\Akademija\Soft\calculateHomeWorkSum'
];

foreach ($functionArray as $i => $funtionName) {
    try{
        $functionArray[$funtionName] = $funtionName(3, 2.2, '1');
    }
    catch(\Throwable $exp){
        $functionArray[$funtionName] = 'Bad input';
    }
    finally{
        unset($functionArray[$i]);
    }
}
foreach ($functionArray as $key => $value) {
echo $consoleColor->apply('color_87', "$key: $value") . PHP_EOL;
}
echo $consoleColor->apply('color_87', "Nfq\Akademija\Strict\calculateHomeWorkSum: $result") . PHP_EOL;


