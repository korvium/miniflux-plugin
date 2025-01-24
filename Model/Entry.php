<?php

namespace Korvium\Plugin\Miniflux\Model;

class Entry extends \ArrayObject
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
    protected $id;
    /**
     * @var \DateTime
     */
    protected $publishedAt;
    /**
     * @var \DateTime
     */
    protected $changedAt;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var Feed
     */
    protected $feed;
    /**
     * @var string
     */
    protected $hash;
    /**
     * @var string
     */
    protected $url;
    /**
     * @var string
     */
    protected $commentsUrl;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $content;
    /**
     * @var string
     */
    protected $author;
    /**
     * @var string
     */
    protected $shareCode;
    /**
     * @var list<Enclosure>
     */
    protected $enclosures;
    /**
     * @var list<string>
     */
    protected $tags;
    /**
     * @var int
     */
    protected $readingTime;
    /**
     * @var int
     */
    protected $userId;
    /**
     * @var int
     */
    protected $feedId;
    /**
     * @var bool
     */
    protected $starred;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getPublishedAt(): \DateTime
    {
        return $this->publishedAt;
    }

    public function setPublishedAt(\DateTime $publishedAt): self
    {
        $this->initialized['publishedAt'] = true;
        $this->publishedAt = $publishedAt;

        return $this;
    }

    public function getChangedAt(): \DateTime
    {
        return $this->changedAt;
    }

    public function setChangedAt(\DateTime $changedAt): self
    {
        $this->initialized['changedAt'] = true;
        $this->changedAt = $changedAt;

        return $this;
    }

    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getFeed(): Feed
    {
        return $this->feed;
    }

    public function setFeed(Feed $feed): self
    {
        $this->initialized['feed'] = true;
        $this->feed = $feed;

        return $this;
    }

    public function getHash(): string
    {
        return $this->hash;
    }

    public function setHash(string $hash): self
    {
        $this->initialized['hash'] = true;
        $this->hash = $hash;

        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }

    public function getCommentsUrl(): string
    {
        return $this->commentsUrl;
    }

    public function setCommentsUrl(string $commentsUrl): self
    {
        $this->initialized['commentsUrl'] = true;
        $this->commentsUrl = $commentsUrl;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

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

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;

        return $this;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->initialized['author'] = true;
        $this->author = $author;

        return $this;
    }

    public function getShareCode(): string
    {
        return $this->shareCode;
    }

    public function setShareCode(string $shareCode): self
    {
        $this->initialized['shareCode'] = true;
        $this->shareCode = $shareCode;

        return $this;
    }

    /**
     * @return list<Enclosure>
     */
    public function getEnclosures(): array
    {
        return $this->enclosures;
    }

    /**
     * @param list<Enclosure> $enclosures
     */
    public function setEnclosures(array $enclosures): self
    {
        $this->initialized['enclosures'] = true;
        $this->enclosures = $enclosures;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param list<string> $tags
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;

        return $this;
    }

    public function getReadingTime(): int
    {
        return $this->readingTime;
    }

    public function setReadingTime(int $readingTime): self
    {
        $this->initialized['readingTime'] = true;
        $this->readingTime = $readingTime;

        return $this;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;

        return $this;
    }

    public function getFeedId(): int
    {
        return $this->feedId;
    }

    public function setFeedId(int $feedId): self
    {
        $this->initialized['feedId'] = true;
        $this->feedId = $feedId;

        return $this;
    }

    public function getStarred(): bool
    {
        return $this->starred;
    }

    public function setStarred(bool $starred): self
    {
        $this->initialized['starred'] = true;
        $this->starred = $starred;

        return $this;
    }
}
