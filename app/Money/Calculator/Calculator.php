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
    public function getValue($value1, $value2)

    {
        return $value1->add($value2);
    }

}