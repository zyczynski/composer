<?php
/**
 * Created by PhpStorm.
 * User: Bartek
 * Date: 2019-03-05
 * Time: 17:20
 */

namespace Money\Calculator;

use Money\Currency;
use Money\Money;

class SubtractCalculator
{
    public function getSubtract(Money $value1, Money $value2)

    {
        return $value1->subtract($value2);
    }
}