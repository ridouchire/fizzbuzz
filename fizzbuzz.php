<?php

function fizzbuzz($number)
{
    if (($number % 3 ) == 0  && ($number % 5) == 0) {
        echo("FizzBuzz\n");
    } elseif (($number % 3) == 0) {
        echo("Fizz\n");
    } elseif (($number % 5) == 0) {
        echo("Buzz\n");
    } else {
        echo("{$number}\n");
    }
}

for ($i = 0; $i < 100; $i++) {
    fizzbuzz($i);
}
