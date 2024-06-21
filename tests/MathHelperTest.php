<?php

use PHPUnit\Framework\TestCase;
use App\MathHelper;

/**
 * @covers App\MathHelper
 */
class MathHelperTest extends TestCase
{
    public function testMultiply()
    {
        $operations = new MathHelper();
        $result = $operations->multiply(3, 4);
        $this->assertEquals(12, $result);
    }

    public function testDivide()
    {
        $operations = new MathHelper();
        $result = $operations->divide(10, 2);
        $this->assertEquals(5, $result);
    }

    public function testDivideByZero()
    {
        $this->expectException(\InvalidArgumentException::class);
        $operations = new MathHelper();
        $operations->divide(10, 0);
    }

    public function testSubtract()
    {
        $operations = new MathHelper();
        $result = $operations->subtract(10, 2);
        $this->assertEquals(8, $result);
    }
}