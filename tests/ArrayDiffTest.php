<?php

namespace Rabib\TestProject;

use PHPUnit\Framework\TestCase;

final class ArrayDiffTest extends TestCase
{
    /**
     * Only one of the array values differs 
     * and the other values are shown to provide context on where the error occurred.
     *
     * @return void
     */
    public function testEquality(): void
    {
        $this->assertSame(
            [1, 2,  3, 4, 5, 6],
            [1, 2, 33, 4, 5, 6]
        );
    }

    /**
     * Generated output will be long to read
     * PHPUnit will split it up and provide a few lines of context around every difference.
     *
     * @return void
     */
    public function testLongEquality(): void
    {
        $this->assertSame(
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2,  3, 4, 5, 6],
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 33, 4, 5, 6]
        );
    }

    /**
     * Here difference in the first index between 1 and '1' is reported
     * even though assertEquals() considers the values as a match.
     *
     * @return void
     */
    public function testEdgeEquality(): void
    {
        $this->assertEquals(
            [1, 2, 3, 4, 5, 6],
            ['1', 2, 33, 4, 5, 6]
        );
    }
}
