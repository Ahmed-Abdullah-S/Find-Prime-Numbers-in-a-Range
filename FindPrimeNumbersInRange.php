<?php

function findPrimesInRange($start, $end)
{
    $primes = [];

    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }

    return $primes;
}

function isPrime($n)
{
    if ($n < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }

    return true;
}

// Example case
$start = 10;
$end = 30;
$primes = findPrimesInRange($start, $end);
echo "Prime numbers between $start and $end: " . implode(", ", $primes) . "\n";
// Output: 11, 13, 17, 19, 23, 29
