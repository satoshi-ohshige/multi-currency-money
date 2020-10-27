<?php
declare(strict_types=1);

namespace AppTest;

use App\Hello;
use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
    public function testHello()
    {
        $hello = new Hello('佐藤');
        $this->assertSame('Hello, 佐藤さん', $hello->say());

        $hello_empty = new Hello();
        $this->assertSame('Hello, 某さん', $hello_empty->say());
    }
}
