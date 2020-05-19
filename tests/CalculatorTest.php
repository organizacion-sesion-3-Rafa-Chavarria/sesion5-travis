<?php
use PHPUnit\Framework\TestCase;
require 'Calculator.php';

class CalculatorTest extends TestCase
{
    private $calculator;
 
    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }
 
    protected function tearDown(): void
    {
        $this->calculator = NULL;
    }
 
    public function testEsparPar(): void
    {
        $result = $this->calculator->espar(2);
        $this->assertEquals(true, $result);
    }
    public function testEsparImpar(): void
    {
        $result = $this->calculator->espar(3);
        $this->assertEquals(false, $result);
    }
 
}
