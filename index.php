<?php
/**
 * Created by PhpStorm.
 * User: Bartek
 * Date: 2019-01-12
 * Time: 18:52
 */

require("vendor/autoload.php");

use Money\Calculator\Calculator;

use Money\Currency;
use Money\Money;


$sum = new Calculator();
var_dump($sum->getValue(Money::PLN(50),Money::PLN(50)));


