<?php

namespace Korvium\Plugin\Miniflux\Model;

class FeedCounters extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var array<string, int>
     */
    protected $readCounters;
    /**
     * @var array<string, int>
     */
    protected $unreadCounters;

    /**
     * @return array<string, int>
     */
    public function getReadCounters(): iterable
    {
        return $this->readCounters;
    }

    /**
     * @param array<string, int> $readCounters
     */
    public function setReadCounters(iterable $readCounters): self
    {
        $this->initialized['readCounters'] = true;
        $this->readCounters = $readCounters;

        return $this;
    }

    /**
     * @return array<string, int>
     */
    public function getUnreadCounters(): iterable
    {
        return $this->unreadCounters;
    }

    /**
     * @param array<string, int> $unreadCounters
     */
    public function setUnreadCounters(iterable $unreadCounters): self
    {
        $this->initialized['unreadCounters'] = true;
        $this->unreadCounters = $unreadCounters;

        return $this;
    }
}
