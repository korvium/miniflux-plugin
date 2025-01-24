<?php

namespace Korvium\Plugin\Miniflux\Model;

class Enclosure extends \ArrayObject
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
     * @var int
     */
    protected $userId;
    /**
     * @var int
     */
    protected $entryId;
    /**
     * @var string
     */
    protected $url;
    /**
     * @var string
     */
    protected $mimeType;
    /**
     * @var int
     */
    protected $size;
    /**
     * @var int
     */
    protected $mediaProgression;

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

    public function getEntryId(): int
    {
        return $this->entryId;
    }

    public function setEntryId(int $entryId): self
    {
        $this->initialized['entryId'] = true;
        $this->entryId = $entryId;

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

    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    public function setMimeType(string $mimeType): self
    {
        $this->initialized['mimeType'] = true;
        $this->mimeType = $mimeType;

        return $this;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function setSize(int $size): self
    {
        $this->initialized['size'] = true;
        $this->size = $size;

        return $this;
    }

    public function getMediaProgression(): int
    {
        return $this->mediaProgression;
    }

    public function setMediaProgression(int $mediaProgression): self
    {
        $this->initialized['mediaProgression'] = true;
        $this->mediaProgression = $mediaProgression;

        return $this;
    }
}
