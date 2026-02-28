<?php
/**
 * Tests for BlockDriftar
 */

use PHPUnit\Framework\TestCase;
use Blockdriftar\Blockdriftar;

class BlockdriftarTest extends TestCase {
    private Blockdriftar $instance;

    protected function setUp(): void {
        $this->instance = new Blockdriftar(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockdriftar::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
