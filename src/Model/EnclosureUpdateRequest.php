<?php

namespace Korvium\Plugin\Miniflux\Model;

class EnclosureUpdateRequest extends \ArrayObject
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
    protected $mediaProgression;

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
