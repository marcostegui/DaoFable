<?php
/**
 * Tests for DaoFable
 */

use PHPUnit\Framework\TestCase;
use Daofable\Daofable;

class DaofableTest extends TestCase {
    private Daofable $instance;

    protected function setUp(): void {
        $this->instance = new Daofable(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Daofable::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
