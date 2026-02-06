<?php
/**
 * Tests for webRogue
 */

use PHPUnit\Framework\TestCase;
use Webrogue\Webrogue;

class WebrogueTest extends TestCase {
    private Webrogue $instance;

    protected function setUp(): void {
        $this->instance = new Webrogue(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Webrogue::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
