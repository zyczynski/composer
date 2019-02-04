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


$sum = new Calculator(Money::PLN(10),Money::PLN(49));
$sum2 = new Calculator(Money::PLN(20),Money::PLN(23));
var_dump($sum->getValue());


