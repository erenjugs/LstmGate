<?php
/**
 * Tests for LstmGate
 */

use PHPUnit\Framework\TestCase;
use Lstmgate\Lstmgate;

class LstmgateTest extends TestCase {
    private Lstmgate $instance;

    protected function setUp(): void {
        $this->instance = new Lstmgate(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Lstmgate::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
