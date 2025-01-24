<?php

namespace Korvium\Plugin\Miniflux\Model;

class EntryResultSet extends \ArrayObject
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
     * @var int
     */
    protected $total;
    /**
     * @var list<Entry>
     */
    protected $entries;

    public function getTotal(): int
    {
        return $this->total;
    }

    public function setTotal(int $total): self
    {
        $this->initialized['total'] = true;
        $this->total = $total;

        return $this;
    }

    /**
     * @return list<Entry>
     */
    public function getEntries(): array
    {
        return $this->entries;
    }

    /**
     * @param list<Entry> $entries
     */
    public function setEntries(array $entries): self
    {
        $this->initialized['entries'] = true;
        $this->entries = $entries;

        return $this;
    }
}
