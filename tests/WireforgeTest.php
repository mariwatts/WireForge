<?php
/**
 * Tests for WireForge
 */

use PHPUnit\Framework\TestCase;
use Wireforge\Wireforge;

class WireforgeTest extends TestCase {
    private Wireforge $instance;

    protected function setUp(): void {
        $this->instance = new Wireforge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Wireforge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
