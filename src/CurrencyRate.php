<?php
declare(strict_types=1);

namespace App;

class CurrencyRate
{
    static $rate = [
        Yen::class => [
            Dollar::class => 0.01,
            Yen::class => 1,
        ],
        Dollar::class => [
            Yen::class => 100,
            Dollar::class => 1,
        ],
    ];
}
