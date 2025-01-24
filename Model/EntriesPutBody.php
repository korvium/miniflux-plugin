<?php

namespace Korvium\Plugin\Miniflux\Model;

class EntriesPutBody extends \ArrayObject
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
     * @var list<int>
     */
    protected $entryIds;
    /**
     * @var string
     */
    protected $status;

    /**
     * @return list<int>
     */
    public function getEntryIds(): array
    {
        return $this->entryIds;
    }

    /**
     * @param list<int> $entryIds
     */
    public function setEntryIds(array $entryIds): self
    {
        $this->initialized['entryIds'] = true;
        $this->entryIds = $entryIds;

        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }
}
