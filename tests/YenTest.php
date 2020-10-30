<?php

namespace AppTest;

use App\Yen;
use PHPUnit\Framework\TestCase;

class YenTest extends TestCase
{
    public function test_Yenオブジェクトを数値に変換することのテスト()
    {
        $this->assertSame(100, (new Yen(100))->toInt());
        $this->assertSame(200, (new Yen(200))->toInt());
    }
}
