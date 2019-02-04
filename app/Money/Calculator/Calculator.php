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
private $value1;
private $value2;



    function __construct($value1, $value2)
    {
        $this->value1 = $value1;
        $this->value2 = $value2;
    }
    public function getValue()
    {
        return ($this->value1)->add($this->value2);
    }

}