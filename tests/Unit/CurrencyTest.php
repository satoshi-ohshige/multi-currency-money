<?php
declare(strict_types=1);

namespace AppTest\Unit;

use App\Currency;
use PHPUnit\Framework\TestCase;

class CurrencyTest extends TestCase {

    public function test_Currencyを継承したオブジェクトを数値に変換することのテスト()
    {
        $currency_100 = new class(100) extends Currency{};

        $this->assertSame(100, $currency_100->toInt());

        $currency_200 = new class(200) extends Currency{};

        $this->assertSame(200, $currency_200->toInt());
    }
}