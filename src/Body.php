<?php declare(strict_types=1);

namespace Breux\Human;

/**
 * Class Body
 * @package Breux\Human
 */
class Body
{
    /** @var Head */
    protected $head;

    /**
     * Body constructor.
     *
     * @param Head $head The head
     */
    public function __construct(Head $head)
    {
        $this->head = $head;
    }

    /**
     * Set the head
     *
     * @param Head $head The head
     * @return Body
     */
    public function setHead(Head $head): Body
    {
        $this->head = $head;

        return $this;
    }

    /**
     * Get the head
     *
     * @return Head
     */
    public function getHead(): Head
    {
        return $this->head;
    }
}
