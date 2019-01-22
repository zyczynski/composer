<?php
/**
 * Created by PhpStorm.
 * User: Bartek
 * Date: 2019-01-12
 * Time: 18:52
 */

require("vendor/autoload.php");

use Money\Calculator\Amount;

use Money\Currency;
use Money\Money;

$sum = new Amount();
var_dump($sum->getValue());



