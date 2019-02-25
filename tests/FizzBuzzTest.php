<?php

namespace Test;

use PHPUnit\Framework\TestCase;

use FizzBuzz\FizzBuzz;

class FizzBuzzTest extends TestCase
{
 	public function testNormalInputSet() {
        $fizzBuzz = new FizzBuzz();
        $inputSet = 17;
        $expectedResults = '1, 2, Fizz, 4, Buzz, Fizz, 7, 8, Fizz, Buzz, 11, Fizz, 13, 14, FizzBuzz, 16, 17';
        $testResults = $fizzBuzz->printFizzBuzz($inputSet);
        $this->assertEquals($expectedResults, $testResults);
    }

}
