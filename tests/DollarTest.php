<?php
declare(strict_types=1);

namespace AppTest;

use App\Dollar;
use App\Yen;
use PHPUnit\Framework\TestCase;

class DollarTest extends TestCase
{
    public function test_Dollarオブジェクトを数値に変換することのテスト()
    {
        $this->assertSame(100, (new Dollar(100))->toInt());
        $this->assertSame(200, (new Dollar(200))->toInt());
    }
}
