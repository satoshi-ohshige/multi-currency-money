<?php
declare(strict_types=1);

namespace App;

class CurrencyRate
{
    static $rate = [
        Yen::class => [
            Dollar::class => 0.01,
        ],
        Dollar::class => [
            Yen::class => 100,
        ],
    ];
}
