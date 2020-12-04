<?php
declare(strict_types=1);

namespace AppTest\Unit;

use App\Dollar;
use PHPUnit\Framework\TestCase;

class DollarTest extends TestCase
{
    public function test_1ドル足す3ドルは4ドルになることのテスト()
    {
        $dollar1 = new Dollar(1);
        $dollar3 = new Dollar(3);

        $add_result = $dollar1->add($dollar3);
        $this->assertSame(4, $add_result->toInt());
        $this->assertInstanceOf(Dollar::class, $add_result);
    }
}
