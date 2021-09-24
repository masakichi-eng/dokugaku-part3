<?php

class PokerGame
{
    function __construct(private array $cards)
    {
    }

    function start(): array
    {
        return $this->cards;
    }
}
