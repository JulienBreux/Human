<?php declare(strict_types=1);

namespace Test\Breux\Human;

use PHPUnit\Framework\TestCase;
use Breux\Human\Human;
use Breux\Human\Life;
use Breux\Human\Body;

/**
 * Class HumanTest
 * @package Test\Breux\Human
 */
class HumanTest extends TestCase
{
    /** @var Human */
    protected $human;

    /**
     * Set up test
     */
    public function setUp()
    {
        $this->human = new Human(
            $this->createMock(Body::class),
            $this->createMock(Life::class)
        );
    }

    /**
     * Test: Serialization
     */
    public function testSerialization()
    {
        $this->assertInstanceOf(\JsonSerializable::class, $this->human);
        $this->assertJsonStringEqualsJsonString(json_encode($this->human), '{"Body":[],"Life":[]}');
    }

    /**
     * Test: Body accessors
     */
    public function testBodyAccessors()
    {
        $fakeBody = $this->getMockBuilder(Body::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->assertInstanceOf(Human::class, $this->human->setBody($fakeBody));
        $this->assertSame($this->human->getBody(), $fakeBody);
    }

    /**
     * Test: Life accessors
     */
    public function testLifeAccessors()
    {
        $fakeLife = $this->createMock(Life::class);

        $this->assertSame($this->human->setLife(new $fakeLife), $this->human);
        $this->assertInstanceOf(Human::class, $this->human->setLife($fakeLife));
        $this->assertSame($this->human->getLife(), $fakeLife);
    }
}
