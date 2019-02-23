<?php
/**
 * Created by PhpStorm.
 * User: Bartek
 * Date: 2019-02-06
 * Time: 17:24
 */

use PHPUnit\Framework\TestCase;

use Money\Money;

class CalculatorTest extends TestCase
{
    public function testAdding()
    {
        $calculator = new \Money\Calculator\Calculator();

        $first = Money::PLN(6);
        $second = Money::EUR(7);
        $result = Money::PLN(13);

        $this->assertEquals(
            $calculator->getValue($first, $second),
            $result
        );
    }
}
