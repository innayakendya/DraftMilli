<?php
/**
 * Tests for DraftMilli
 */

use PHPUnit\Framework\TestCase;
use Draftmilli\Draftmilli;

class DraftmilliTest extends TestCase {
    private Draftmilli $instance;

    protected function setUp(): void {
        $this->instance = new Draftmilli(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Draftmilli::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
