<?php

namespace Korvium\Plugin\Miniflux\Model;

class VersionResponse extends \ArrayObject
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
    protected $version;
    /**
     * @var string
     */
    protected $commit;
    /**
     * @var string
     */
    protected $buildDate;
    /**
     * @var string
     */
    protected $goVersion;
    /**
     * @var string
     */
    protected $compiler;
    /**
     * @var string
     */
    protected $arch;
    /**
     * @var string
     */
    protected $os;

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }

    public function getCommit(): string
    {
        return $this->commit;
    }

    public function setCommit(string $commit): self
    {
        $this->initialized['commit'] = true;
        $this->commit = $commit;

        return $this;
    }

    public function getBuildDate(): string
    {
        return $this->buildDate;
    }

    public function setBuildDate(string $buildDate): self
    {
        $this->initialized['buildDate'] = true;
        $this->buildDate = $buildDate;

        return $this;
    }

    public function getGoVersion(): string
    {
        return $this->goVersion;
    }

    public function setGoVersion(string $goVersion): self
    {
        $this->initialized['goVersion'] = true;
        $this->goVersion = $goVersion;

        return $this;
    }

    public function getCompiler(): string
    {
        return $this->compiler;
    }

    public function setCompiler(string $compiler): self
    {
        $this->initialized['compiler'] = true;
        $this->compiler = $compiler;

        return $this;
    }

    public function getArch(): string
    {
        return $this->arch;
    }

    public function setArch(string $arch): self
    {
        $this->initialized['arch'] = true;
        $this->arch = $arch;

        return $this;
    }

    public function getOs(): string
    {
        return $this->os;
    }

    public function setOs(string $os): self
    {
        $this->initialized['os'] = true;
        $this->os = $os;

        return $this;
    }
}
