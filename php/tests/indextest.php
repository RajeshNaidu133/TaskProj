<?php
//
use PHPUnit\Framework\TestCase;

require 'php/index.php';

class SampleTest extends PHPUnit_Framework_TestCase
{
pubic function testPassFunction()
{
$this->assertTrue(true);

}
pubic function testFailFunction()
{
$this->assertTrue(false);

}

}

