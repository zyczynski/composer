<?php
/**
 * Created by PhpStorm.
 * User: Bartek
 * Date: 2019-03-05
 * Time: 17:23
 */

use PHPUnit\Framework\TestCase;

use Money\Money;

class SubtractTest extends TestCase
{
    public function testSubtract()
    {
        $calculator = new \Money\Calculator\Calculator();

        $first = Money::PLN(10);
        $second = Money::PLN(5);
        $result = Money::PLN(5);

        $this->assertEquals(
            $calculator->getValue($first, $second),
            $result
        );
    }
}