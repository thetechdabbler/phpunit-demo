<?php

use Demo\App\MathHelper;
use PHPUnit\Framework\TestCase;

/**
 * @covers Demo\App\MathHelper
 */
class MathHelperTraineeTest extends TestCase
{

    /**
     * @test
     * @dataProvider additionProvider
     */
    public function check_if_addition_works($a, $b, $expected)
    {
        $operations = new MathHelper();
        $result = $operations->add($a, $b);
        $this->assertEquals($expected, $result);
    }

    /**
     * Summary of manish
     * @return void
     * @test
     */
    public function manish()
    {
        $this->assertTrue(true);
    }

    public static function additionProvider()
    {
        return [
            'First scenario' => [1, 2, 3],
            'scenario with decimal numbers' => [3, 4, 7],
            'scenario with fractions' => [0.1, 0.2, 0.3],
        ];
    }
}