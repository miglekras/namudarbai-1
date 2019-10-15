<?php
require __DIR__ . '/vendor/autoload.php';

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
$consoleColor = new JakubOnderka\PhpConsoleColor\ConsoleColor();

$functionArray = [
    'calculateHomeWorkSum',
    'Nfq\Akademija\NotTyped\calculateHomeWorkSum',
    'Nfq\Akademija\Soft\calculateHomeWorkSum'
];
foreach ($functionArray as $i => $funtionName) {
    try {
        $resultArray[$i] = $funtionName(3, 2.2, '1');
    } catch (\Throwable $exp) {
        $resultArray[$i]  = 'Bad input';
    }
}
foreach ($functionArray as $i => $funtionName) {
    echo $consoleColor->apply('color_87', "$functionArray[$i]: $resultArray[$i]") . PHP_EOL;
}
$resultStrict = Nfq\Akademija\Strict\answer();
echo $consoleColor->apply('color_87', "Nfq\Akademija\Strict\calculateHomeWorkSum:$resultStrict ") . PHP_EOL;