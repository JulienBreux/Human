<?php declare(strict_types=1);

namespace Test\Breux\Human;

use PHPUnit\Framework\TestCase;
use Breux\Human\Head;

/**
 * Class HeadTest
 * @package Test\Breux\Human
 */
class HeadTest extends TestCase
{
    /** @var Head */
    protected $head;

    /**
     * Set up test
     */
    public function setUp()
    {
        $this->head = new Head;
    }

    /**
     * Test: Empty class
     * Note: Temp test
     */
    public function testEmptyClass()
    {
        $this->assertInstanceOf(Head::class, $this->head);
    }
}
