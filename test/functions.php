<?php

use PHPUnit\Framework\TestCase;

require ('../functions.php');

class StackTest extends TestCase
{
    //success
    public function testCalculateDistanceSuccess() {

        $expected = '1.70 metres';
        $example1 = 2;
        $example2 = 0.1;
        $example3 = 1;
        $example4 = 1.5;
        $case = calculateDistance($example1, $example2, $example3, $example4);
        $this->assertEquals($case, $expected);
    }

    //failure
    public function testCalculateDistanceFailure() {

        $expected = '6.90 metres';
        $example1 = '3';
        $example2 = '0.8';
        $example3 = '3';
        $example4 = '1.5';
        $case = calculateDistance($example1, $example2, $example3, $example4);
        $this->assertEquals($case, $expected);

    }

    //success
    public function testCalculatePostsAndRailsSuccess() {

        $expected = 7;
        $example1 = 10;
        $example2 = 0.1;
        $example3 = 1.5;
        $case = calculatePostsAndRails($example1, $example2, $example3);
        $this->assertEquals($case, $expected);
    }

    //failure
    public function testCalculatePostsAndRailsFailure() {

        $expected = '7';
        $example1 = '10';
        $example2 = '0.1';
        $example3 = '1.5';
        $case = calculatePostsAndRails($example1, $example2, $example3);
        $this->assertEquals($case, $expected);
    }
}
