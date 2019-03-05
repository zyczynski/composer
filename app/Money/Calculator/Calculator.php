<?php
/**
 * Created by PhpStorm.
 * User: Bartek
 * Date: 2019-01-21
 * Time: 18:33
 */

namespace Money\Calculator;

use Money\Currency;
use Money\Money;

class Calculator
{
    public function getValue(Money $value1, Money $value2)

    {
        return $value1->add($value2);
    }

    public function getSubtract(Money $value1, Money $value2)

    {
        return $value1->subtract($value2);
    }

}