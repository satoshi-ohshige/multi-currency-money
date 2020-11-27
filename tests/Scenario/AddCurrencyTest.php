<?php
declare(strict_types=1);

namespace AppTest\Scenario;

use App\Dollar;
use App\Exchange;
use App\Yen;
use PHPUnit\Framework\TestCase;

class AddCurrencyTest extends TestCase
{
    public function test_100円と1ドルを足すと200円になることのテスト()
    {
        $yen100 = new Yen(100);
        $dollar1 = new Dollar(1);
        $exchange = new Exchange();

        $exchanged_dollar1 = $exchange->toYen($dollar1);
        $add_result = $yen100->add($exchanged_dollar1);

        $this->assertSame(200, $add_result->toInt());
    }

    public function test_1ドルと100円を足すと2ドルになることのテスト()
    {
        $dollar1 = new Dollar(1);
        $yen100 = new Yen(100);
        $exchange = new Exchange();

        $exchanged_yen100 = $exchange->toDollar($yen100);
        $add_result = $dollar1->add($exchanged_yen100);

        $this->assertSame(2, $add_result->toInt());
    }
}
