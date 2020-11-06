<?php
declare(strict_types=1);

namespace AppTest;

use App\Calculator;
use App\Yen;
use PHPUnit\Framework\TestCase;

class AddTest extends TestCase
{
    public function test_100円足す200円は300円になることのテスト()
    {
        $yen100 = new Yen(100);
        $yen200 = new Yen(200);

        $calculator = new Calculator();
        $this->assertSame(300, $calculator->add($yen100, $yen200)->toInt());
    }
}
