<?php
/**
 * Tests for SolarNetwork
 */

use PHPUnit\Framework\TestCase;
use Solarnetwork\Solarnetwork;

class SolarnetworkTest extends TestCase {
    private Solarnetwork $instance;

    protected function setUp(): void {
        $this->instance = new Solarnetwork(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Solarnetwork::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
