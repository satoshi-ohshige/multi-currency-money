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

    public function test_Currencyを継承したオブジェクトが小数値を返すことのテスト()
    {
        $currency_100 = new class(100) extends Currency{};

        $this->assertSame((float)100, $currency_100->getAmount());

        $currency_0dot5 = new class(0.5) extends Currency{};

        $this->assertSame(0.5, $currency_0dot5->getAmount());
    }
}
