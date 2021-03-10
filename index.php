<?php

require_once 'vendor/autoload.php';


use App\Money;

//$price = 10000;

// $newprice = new Money($price);

// print_r($newprice);


function getPrice($value)
{
  return (new Money($value))->formatted();
}

print_r(getPrice(10000));
