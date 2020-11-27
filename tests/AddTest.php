<?php
declare(strict_types=1);

namespace AppTest;

use App\Yen;
use App\Dollar;
use PHPUnit\Framework\TestCase;

class AddTest extends TestCase
{
    public function test_100円足す200円は300円になることのテスト()
    {
        $yen100 = new Yen(100);
        $yen200 = new Yen(200);

        $add_result = $yen100->add($yen200);
        $this->assertSame(300, $add_result->toInt());
        $this->assertInstanceOf(Yen::class, $add_result);
    }

    public function test_100円足す300円は400円になることのテスト()
    {
        $yen100 = new Yen(100);
        $yen300 = new Yen(300);

        $add_result = $yen100->add($yen300);
        $this->assertSame(400, $add_result->toInt());
        $this->assertInstanceOf(Yen::class, $add_result);

    }

    public function test_1ドル足す3ドルは4ドルになることのテスト()
    {
        $dollar1 = new Dollar(1);
        $dollar3 = new Dollar(3);

        $add_result = $dollar1->add($dollar3);
        $this->assertSame(4, $add_result->toInt());
        $this->assertInstanceOf(Dollar::class, $add_result);
    }

    public function test_100円足す1ドルは200円になることのテスト()
    {
        $yen100 = new Yen(100);
        $dollar1 = new Dollar(1);

        $add_result = $yen100->add($dollar1);
        $this->assertSame(200, $add_result->toInt());
        $this->assertInstanceOf(Yen::class, $add_result);
    }

    public function test_1ドル足す100円は2ドルになることのテスト()
    {
        $dollar1 = new Dollar(1);
        $yen100 = new Yen(100);

        $add_result = $dollar1->add($yen100);
        $this->assertSame(2, $add_result->toInt());
        $this->assertInstanceOf(Dollar::class, $add_result);
    }

}
