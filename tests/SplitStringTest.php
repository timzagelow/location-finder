<?php

require './classes/String.php';

use Classes\String;

class SplitStringTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testSplitWithAllNumbers()
    {
        $str = new String();
        $number = 101;

        $this->assertContains($number, $str->split('101'));
    }

    public function testSplitWithAllLetters()
    {
        $str = new String();
        $letters = 'abc';

        $this->assertContains($letters, $str->split('abc'));
    }

    public function testSplitWithLettersAndNumbers()
    {
        $str = new String();
        $testString = '101abc';

        $this->assertContains('101', $str->split($testString));
        $this->assertContains('abc', $str->split($testString));
    }

    public function testSplitWithMultipleLettersAndNumbers()
    {
        $str = new String();
        $testString = '101abc321def';

        $split = $str->split($testString);

        $this->assertEquals('101', $split[0]);
        $this->assertEquals('abc', $split[1]);
        $this->assertEquals('321', $split[2]);
        $this->assertEquals('def', $split[3]);
    }
}