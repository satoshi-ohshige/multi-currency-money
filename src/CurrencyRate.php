<?php
declare(strict_types=1);

namespace App;

class CurrencyRate
{
    static $rate = [
        Yen::class => [
            Dollar::class => 0.01,
            Euro::class => 1 / 130,
            // TODO Euroを追加しないといけないけど全部追加するのはめんどいので、基底通貨クラスを作ろ？
        ],
        Dollar::class => [
            Yen::class => 100,
            // TODO Euroを追加しないといけないけど全部追加するのはめんどいので、基底通貨クラスを作ろ？
        ],
    ];
}
