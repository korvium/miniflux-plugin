<?php

namespace Korvium\Plugin\Miniflux\Model;

class IntegrationsStatusGetResponse200 extends \ArrayObject
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
     * @var bool
     */
    protected $hasIntegrations;

    public function getHasIntegrations(): bool
    {
        return $this->hasIntegrations;
    }

    public function setHasIntegrations(bool $hasIntegrations): self
    {
        $this->initialized['hasIntegrations'] = true;
        $this->hasIntegrations = $hasIntegrations;

        return $this;
    }
}
