<?php

require_once 'classes/Basket.class.php';
require_once 'classes/Item.class.php';

require_once 'basketToHtml.php';


$basicTaxRate = 0.1;
$importDutyRate = 0.05;

$noTaxRate = 0.0;

//Input 1
$input1 = [
    new Item('book', 12.49, $noTaxRate, $noTaxRate), 
    new Item('music CD', 14.99, $basicTaxRate, $noTaxRate),
    new Item('chocolate bar', 0.85, $noTaxRate, $noTaxRate),
];

$basket1 = new Basket();

foreach ($input1 as $item) {
    $basket1->addItem($item);
}


//Input 2
$input2 = [
    new Item('imported box of chocolates', 10.00, $noTaxRate, $importDutyRate),
    new Item('imported bottle of perfume', 47.50, $basicTaxRate, $importDutyRate),
];

$basket2 = new Basket();

foreach ($input2 as $item) {
    $basket2->addItem($item);
}


//Input 3
$input3 = [
    new Item('imported bottle of perfume', 27.99, $basicTaxRate, $importDutyRate),
    new Item('bottle of perfume', 18.99, $basicTaxRate, $noTaxRate),
    new Item('packet of paracetamol', 9.75, $noTaxRate, $noTaxRate),
    new Item('imported box of chocolates', 11.25, $noTaxRate, $importDutyRate),
];

$basket3 = new Basket();

foreach ($input3 as $item) {
    $basket3->addItem($item);
}

include 'page.php';



