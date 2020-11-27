<?php
declare(strict_types=1);

namespace AppTest;

use App\Yen;
use App\Dollar;
use PHPUnit\Framework\TestCase;

class YenTest extends TestCase
{
    public function test_Yenオブジェクトを数値に変換することのテスト()
    {
        $this->assertSame(100, (new Yen(100))->toInt());
        $this->assertSame(200, (new Yen(200))->toInt());
    }
}
