<?php
/**
 * FizzBuzz test algorithm
 *
 * PHP version 7
 *
 * @category Test
 * @package  FizzBuzz
 * @author   ridouchire <ridouchire@gmail.com>
 * @license  GPL v3
 * @link     none
 */

use PHPUnit\Framework\TestCase;
require "./fizzbuzz.php";

/**
 * Class implements test for function fizzbuzz
 */
class FizzBuzzTest extends TestCase
{
    /**
     * Test for function fizzbuzz
     *
     * @param int    $number   Argument for the function being tested
     * @param string $expected Expected value
     *
     * @dataProvider dpFizzBuzz
     *
     * @return void
     */
    public function testFizzBuzz($number, $expected)
    {
        $this->assertEquals($expected, fizzbuzz($number));
    }

    /**
     * Returns dataset for function test testFizzBuzz()
     *
     * @return array
     */
    public function dpFizzBuzz()
    {
        return array(
            array(
                0,
                'FizzBuzz',
            ),
            array(
                1,
                '1',
            ),
            array(
                8,
                '8',
            ),
            array(
                5,
                'Buzz',
            ),
            array(
                100,
                'Buzz',
            ),
            array(
                1000000,
                'Buzz',
            ),
            array(
                1000001,
                '1000001',
            )
        );
    }
}
