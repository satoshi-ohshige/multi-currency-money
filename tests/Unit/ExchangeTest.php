<?php
declare(strict_types=1);

namespace AppTest\Unit;

use App\Dollar;
use App\Exchange;
use App\Yen;
use PHPUnit\Framework\TestCase;

class ExchangeTest extends TestCase
{

    public function test_円をドルに変換するテスト()
    {
        $yen100 = new Yen(100);
        $yen50 = new Yen(50);
        $exchange = new Exchange();

        $exchanged_dollar1 = $exchange->toDollar($yen100);
        $exchanged_dollar2 = $exchange->toDollar($yen50);

        $this->assertSame(1, $exchanged_dollar1->toInt());
        $this->assertSame(0.5, $exchanged_dollar2->getAmount());

        $this->assertInstanceOf(Dollar::class, $exchanged_dollar1);
        $this->assertInstanceOf(Dollar::class, $exchanged_dollar2);

    }

    // public function test_円を円に変換するテスト()
    // {
    //     $yen100 = new Yen(100);
    //     $this->assertSame($yen100->toInt(), $yen100->toYen()->toInt());
    // }

    public function test_ドルを円に変換するテスト()
    {
        $dollar1 = new Dollar(1);
        $dollar2 = new Dollar(0.5);
        $exchange = new Exchange();

        $exchanged_yen100 = $exchange->toYen($dollar1);
        $exchanged_yen50 = $exchange->toYen($dollar2);

        $this->assertSame(100, $exchanged_yen100->toInt());
        $this->assertSame((float)50, $exchanged_yen50->getAmount());

        $this->assertInstanceOf(Yen::class, $exchanged_yen100);
        $this->assertInstanceOf(Yen::class, $exchanged_yen50);
    }

    // public function test_ドルをドルに変換するテスト()
    // {
    //     $dollar1 = new Dollar(1);
    //     $this->assertSame($dollar1->toInt(), $dollar1->toDollar()->toInt());
    // }
}
