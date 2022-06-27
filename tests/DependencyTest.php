<?php

namespace Rabib\TestProject;

use PHPUnit\Framework\TestCase;

final class DependencyTest extends TestCase
{
    /**
     * This is test method for checking stack item count
     * This is a producer
     *
     * @return $stack
     */
    public function testEmpty(): array
    {
        $stack = [];
        $this->assertSame(0, count($stack));
        return $stack;
    }

    /**
     * This method works both as a producer and a consumer
     * @depends testEmpty
     * 
     * @return $stack
     */

    public function testPush(array $stack): array
    {
        array_push($stack, 'foo');
        $this->assertSame('foo', $stack[count($stack) - 1]);
        $this->assertSame(1, count($stack));
        return $stack;
    }

    /**
     * This method is a consumer
     * @depends testPush
     */
    public function testPop(array $stack): void
    {
        $this->assertSame('foo', array_pop($stack));
        $this->assertSame(0, count($stack));
    }
}
