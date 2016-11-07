<?php declare(strict_types=1);

namespace Test\Breux\Human;

use PHPUnit\Framework\TestCase;
use Breux\Human\Body;
use Breux\Human\Head;

class BodyTest extends TestCase
{
    /** @var Body */
    protected $body;

    /**
     * Set up test
     */
    public function setUp()
    {
        $this->body = new Body(
            $this->createMock(Head::class)
        );
    }

    /**
     * Test: Head accessors
     */
    public function testHeadAccessors()
    {
        $fakeHead = $this->createMock(Head::class);

        $this->assertSame($this->body->setHead(new $fakeHead), $this->body);
        $this->assertInstanceOf(Body::class, $this->body->setHead($fakeHead));
        $this->assertSame($this->body->getHead(), $fakeHead);
    }
}
