<?php

class PocTest extends \PHPUnit\Framework\TestCase
{
    public function testWithAssertSame()
    {
        static::assertSame('abc', 'abcd');
    }

    public function testWithAssertEquals()
    {
        static::assertEquals('abc', 'abcd');
    }
}
