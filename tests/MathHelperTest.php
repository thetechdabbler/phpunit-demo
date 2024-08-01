<?php

use PHPUnit\Framework\TestCase;
use Demo\App\MathHelper;

/**
 * @covers Demo\App\MathHelper
 */
class MathHelperTest extends TestCase
{
    /**
     * Summary of beforeTest
     * @return void
     * @before
     */
    protected function beforeTest(): void
    {
        $this->sut = new MathHelper();
    }

    public $sut;

    /**
     * 
     * @covers Demo\App\MathHelper::add
     * @return void
     * @group mitesh
     * @group pratap
     */
    public function testMultiply()
    {
        $result = $this->sut->multiply(3, 4);
        $this->assertEquals(12, $result);
    }

    public function testDivide()
    {

        $result = $this->sut->divide(10, 2);
        $this->assertEquals(5, $result);
    }

    public function testDivideByZero()
    {
        $this->expectException(\InvalidArgumentException::class);

        $this->sut->divide(10, 0);
    }

    public function testSubtract()
    {
        $operations = new MathHelper();
        $result = $this->sut->subtract(10, 2);
        $this->assertEquals(8, $result);
    }
}