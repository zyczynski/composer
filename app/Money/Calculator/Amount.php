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

class Amount
{
private $value1;
private $value2;
    /**
     * @return Money
     */
    public function getValue()
    {

        $this->value1=Money::PLN(800);
        $this->value2=Money::PLN(800);

        return ($this->value1)->add($this->value2);

    }
}