<?php
/**
 * FizzBuzz algorithm implementing by ridouchire
 *
 * PHP version 7
 *
 * @category Joke
 * @package  FizzBuzz
 * @author   ridouchire <ridouchire@gmail.com>
 * @license  GPL v3
 * @link     none
 */

/**
 * Check the number with fizzuzz
 *
 * @param int $number Number
 *
 * @return string
 */
function fizzbuzz(int $number): string
{
    if (($number % 3 ) == 0  && ($number % 5) == 0) {
        return (string) "FizzBuzz";
    } elseif (($number % 3) == 0) {
        return (string) "Fizz";
    } elseif (($number % 5) == 0) {
        return (string) "Buzz";
    } else {
        return (string) "{$number}";
    }
}
