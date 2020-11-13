<?php
declare(strict_types=1);

namespace AppTest;

use App\Calculator;
use App\Yen;
use App\Dollar;
use PHPUnit\Framework\TestCase;

class AddTest extends TestCase
{
    public function test_100円足す200円は300円になることのテスト()
    {
        $yen100 = new Yen(100);
        $yen200 = new Yen(200);

        $calculator = new Calculator();

        $add_result = $calculator->add($yen100, $yen200);
        $this->assertSame(300, $add_result->toInt());
        $this->assertInstanceOf(Yen::class, $add_result);
    }

    public function test_100円足す300円は400円になることのテスト()
    {
        $yen100 = new Yen(100);
        $yen300 = new Yen(300);

        $calculator = new Calculator();

        $add_result = $calculator->add($yen100, $yen300);
        $this->assertSame(400, $add_result->toInt());
        $this->assertInstanceOf(Yen::class, $add_result);

    }

    public function test_1ドル足す3ドルは4ドルになることのテスト()
    {
        $dollar1 = new Dollar(1);
        $dollar3 = new Dollar(3);

        $calculator = new Calculator();

        // TODO: このてすとは動かない
        $add_result = $calculator->add($dollar1, $dollar3);
        $this->assertSame(4, $add_result->toInt());
        $this->assertInstanceOf(Dollar::class, $add_result);
    }

}
