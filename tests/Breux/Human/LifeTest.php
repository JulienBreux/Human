<?php declare(strict_types=1);

namespace Test\Breux\Human;

use PHPUnit\Framework\TestCase;
use Breux\Human\Life;

/**
 * Class LifeTest
 * @package Test\Breux\Human
 */
class LifeTest extends TestCase
{
    /** @var Life */
    protected $life;

    /**
     * Set up test
     */
    public function setUp()
    {
        $this->life = new Life;
    }

    /**
     * Test: Empty class
     * Note: Temp test
     */
    public function testEmptyClass()
    {
        $this->assertInstanceOf(Life::class, $this->life);
    }
}
