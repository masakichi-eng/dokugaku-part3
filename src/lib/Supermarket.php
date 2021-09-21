<?php

const TAX = 10;
const PRICES = [
    1 =>['price' => 100, 'type' => ''],
    2 =>['price' => 150, 'type' => ''],
    3 =>['price' => 200, 'type' => ''],
    4 =>['price' => 350, 'type' => ''],
    5 =>['price' => 180, 'type' => 'drink'],
    6 =>['price' => 220, 'type' => ''],
    7 =>['price' => 440, 'type' => 'bento'],
    8 =>['price' => 380, 'type' => 'bento'],
    9 =>['price' => 80, 'type' => 'drink'],
    10 =>['price' => 100, 'type' => 'drink'],
];

function calc(string $time, array $items): int
{
    $totalAmount = 0;

    foreach ($items as $item){
        $totalAmount += PRICES[$item]['price'];
    }

    $totalAmount -= discountOnion(array_count_values($items)[1]);

    return (int) $totalAmount * (100 + TAX) / 100;
}
