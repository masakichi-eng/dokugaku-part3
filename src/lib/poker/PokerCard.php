<?php

class PokerCard
{
    const CARD_RANK = [
        '2' => 1,
        '3' => 2,
        '4' => 3,
        '5' => 4,
        '6' => 5,
        '7' => 6,
        '8' => 7,
        '9' => 8,
        '10' => 9,
        'J' => 10,
        'Q' => 11,
        'K' => 12,
        'A' => 13,
    ];

    public function __construct(private string $suitNumber)
    {
    }

    public function getRank(): int
    {
        // クラス内の定数には self::CONSTANT でアクセスできます
        return self::CARD_RANK[substr($this->suitNumber, 1, strlen($this->suitNumber) - 1)];
    }
}
