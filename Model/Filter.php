<?php

namespace Korvium\Plugin\Miniflux\Model;

class Filter extends \ArrayObject
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
     * @var string
     */
    protected $status;
    /**
     * @var int
     */
    protected $offset;
    /**
     * @var int
     */
    protected $limit;
    /**
     * @var string
     */
    protected $order;
    /**
     * @var string
     */
    protected $direction;
    /**
     * @var string
     */
    protected $starred;
    /**
     * @var int
     */
    protected $before;
    /**
     * @var int
     */
    protected $after;
    /**
     * @var int
     */
    protected $publishedBefore;
    /**
     * @var int
     */
    protected $publishedAfter;
    /**
     * @var int
     */
    protected $changedBefore;
    /**
     * @var int
     */
    protected $changedAfter;
    /**
     * @var int
     */
    protected $beforeEntryID;
    /**
     * @var int
     */
    protected $afterEntryID;
    /**
     * @var string
     */
    protected $search;
    /**
     * @var int
     */
    protected $categoryID;
    /**
     * @var int
     */
    protected $feedID;
    /**
     * @var list<string>
     */
    protected $statuses;
    /**
     * @var bool
     */
    protected $globallyVisible;

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

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function setOffset(int $offset): self
    {
        $this->initialized['offset'] = true;
        $this->offset = $offset;

        return $this;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function setLimit(int $limit): self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;

        return $this;
    }

    public function getOrder(): string
    {
        return $this->order;
    }

    public function setOrder(string $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;

        return $this;
    }

    public function getDirection(): string
    {
        return $this->direction;
    }

    public function setDirection(string $direction): self
    {
        $this->initialized['direction'] = true;
        $this->direction = $direction;

        return $this;
    }

    public function getStarred(): string
    {
        return $this->starred;
    }

    public function setStarred(string $starred): self
    {
        $this->initialized['starred'] = true;
        $this->starred = $starred;

        return $this;
    }

    public function getBefore(): int
    {
        return $this->before;
    }

    public function setBefore(int $before): self
    {
        $this->initialized['before'] = true;
        $this->before = $before;

        return $this;
    }

    public function getAfter(): int
    {
        return $this->after;
    }

    public function setAfter(int $after): self
    {
        $this->initialized['after'] = true;
        $this->after = $after;

        return $this;
    }

    public function getPublishedBefore(): int
    {
        return $this->publishedBefore;
    }

    public function setPublishedBefore(int $publishedBefore): self
    {
        $this->initialized['publishedBefore'] = true;
        $this->publishedBefore = $publishedBefore;

        return $this;
    }

    public function getPublishedAfter(): int
    {
        return $this->publishedAfter;
    }

    public function setPublishedAfter(int $publishedAfter): self
    {
        $this->initialized['publishedAfter'] = true;
        $this->publishedAfter = $publishedAfter;

        return $this;
    }

    public function getChangedBefore(): int
    {
        return $this->changedBefore;
    }

    public function setChangedBefore(int $changedBefore): self
    {
        $this->initialized['changedBefore'] = true;
        $this->changedBefore = $changedBefore;

        return $this;
    }

    public function getChangedAfter(): int
    {
        return $this->changedAfter;
    }

    public function setChangedAfter(int $changedAfter): self
    {
        $this->initialized['changedAfter'] = true;
        $this->changedAfter = $changedAfter;

        return $this;
    }

    public function getBeforeEntryID(): int
    {
        return $this->beforeEntryID;
    }

    public function setBeforeEntryID(int $beforeEntryID): self
    {
        $this->initialized['beforeEntryID'] = true;
        $this->beforeEntryID = $beforeEntryID;

        return $this;
    }

    public function getAfterEntryID(): int
    {
        return $this->afterEntryID;
    }

    public function setAfterEntryID(int $afterEntryID): self
    {
        $this->initialized['afterEntryID'] = true;
        $this->afterEntryID = $afterEntryID;

        return $this;
    }

    public function getSearch(): string
    {
        return $this->search;
    }

    public function setSearch(string $search): self
    {
        $this->initialized['search'] = true;
        $this->search = $search;

        return $this;
    }

    public function getCategoryID(): int
    {
        return $this->categoryID;
    }

    public function setCategoryID(int $categoryID): self
    {
        $this->initialized['categoryID'] = true;
        $this->categoryID = $categoryID;

        return $this;
    }

    public function getFeedID(): int
    {
        return $this->feedID;
    }

    public function setFeedID(int $feedID): self
    {
        $this->initialized['feedID'] = true;
        $this->feedID = $feedID;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getStatuses(): array
    {
        return $this->statuses;
    }

    /**
     * @param list<string> $statuses
     */
    public function setStatuses(array $statuses): self
    {
        $this->initialized['statuses'] = true;
        $this->statuses = $statuses;

        return $this;
    }

    public function getGloballyVisible(): bool
    {
        return $this->globallyVisible;
    }

    public function setGloballyVisible(bool $globallyVisible): self
    {
        $this->initialized['globallyVisible'] = true;
        $this->globallyVisible = $globallyVisible;

        return $this;
    }
}
