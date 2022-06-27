<?php

namespace Rabib\TestProject;

use PHPUnit\Framework\TestCase;

final class DataTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testAdd(int $a, int $b, int $expected): void
    {
        $this->assertSame($expected, $a + $b);
    }

    public function additionProvider(): array
    {
        return [
            [0, 0, 0],
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 3]
        ];
    }

    /**
     * @dataProvider additionNamed
     */
    public function testNamed(int $a, int $b, int $expected): void
    {
        $this->assertSame($expected, $a + $b);
    }

    public function additionNamed(): array
    {
        return [
            'adding zeros'  => [0, 0, 0],
            'zero plus one' => [0, 1, 1],
            'one plus zero' => [1, 0, 1],
            'one plus one'  => [1, 1, 3]
        ];
    }

    /**
     * @dataProvider additionProvider
     * @dataProvider additionNamed
     */
    public function testMultiple(int $a, int $b, int $expected): void
    {
        $this->assertSame($expected, $a + $b);
    }
}
