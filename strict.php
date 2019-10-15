<?php

declare(strict_types=1);

namespace Nfq\Akademija\Strict;

function calculateHomeWorkSum(int ...$numbers): int
{
    return array_sum($numbers);
}

function answer()
{
    try {
        $result = calculateHomeWorkSum(3, 2.2, '1');
    } catch (\Throwable $exp) {
        $result = 'Bad input';
    }
    return $result;
}
