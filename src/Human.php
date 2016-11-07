<?php declare(strict_types=1);

namespace Breux\Human;

/**
 * Class Human
 * @package Breux\Human
 */
class Human implements \JsonSerializable
{
    use SerializableTrait;

    /** @var Body */
    protected $body;

    /** @var Life */
    protected $life;

    /**
     * Human constructor
     *
     * @param Body $body The body
     * @param Life $life The life
     */
    public function __construct(Body $body, Life $life)
    {
        $this->body = $body;
        $this->life = $life;
    }

    /**
     * Set the body.
     *
     * @param Body $body The body
     * @return Human
     */
    public function setBody(Body $body): Human
    {
        $this->body = $body;

        return $this;
    }

    /**
     * @return Body
     */
    public function getBody(): Body
    {
        return $this->body;
    }

    /**
     * Set the life
     *
     * @param Life $life The life
     * @return Human
     */
    public function setLife(Life $life): Human
    {
        $this->life = $life;

        return $this;
    }

    /**
     * Get the life
     *
     * @return Life
     */
    public function getLife(): Life
    {
        return $this->life;
    }
}
