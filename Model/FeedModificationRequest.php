<?php

namespace Korvium\Plugin\Miniflux\Model;

class FeedModificationRequest extends \ArrayObject
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
    protected $feedUrl;
    /**
     * @var string
     */
    protected $siteUrl;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $scraperRules;
    /**
     * @var string
     */
    protected $rewriteRules;
    /**
     * @var string
     */
    protected $blocklistRules;
    /**
     * @var string
     */
    protected $keeplistRules;
    /**
     * @var bool
     */
    protected $crawler;
    /**
     * @var string
     */
    protected $userAgent;
    /**
     * @var string
     */
    protected $cookie;
    /**
     * @var string
     */
    protected $username;
    /**
     * @var string
     */
    protected $password;
    /**
     * @var int
     */
    protected $categoryId;
    /**
     * @var bool
     */
    protected $disabled;
    /**
     * @var bool
     */
    protected $ignoreHttpCache;
    /**
     * @var bool
     */
    protected $allowSelfSignedCertificates;
    /**
     * @var bool
     */
    protected $fetchViaProxy;
    /**
     * @var bool
     */
    protected $hideGlobally;
    /**
     * @var bool
     */
    protected $disableHttp2;

    public function getFeedUrl(): string
    {
        return $this->feedUrl;
    }

    public function setFeedUrl(string $feedUrl): self
    {
        $this->initialized['feedUrl'] = true;
        $this->feedUrl = $feedUrl;

        return $this;
    }

    public function getSiteUrl(): string
    {
        return $this->siteUrl;
    }

    public function setSiteUrl(string $siteUrl): self
    {
        $this->initialized['siteUrl'] = true;
        $this->siteUrl = $siteUrl;

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

    public function getScraperRules(): string
    {
        return $this->scraperRules;
    }

    public function setScraperRules(string $scraperRules): self
    {
        $this->initialized['scraperRules'] = true;
        $this->scraperRules = $scraperRules;

        return $this;
    }

    public function getRewriteRules(): string
    {
        return $this->rewriteRules;
    }

    public function setRewriteRules(string $rewriteRules): self
    {
        $this->initialized['rewriteRules'] = true;
        $this->rewriteRules = $rewriteRules;

        return $this;
    }

    public function getBlocklistRules(): string
    {
        return $this->blocklistRules;
    }

    public function setBlocklistRules(string $blocklistRules): self
    {
        $this->initialized['blocklistRules'] = true;
        $this->blocklistRules = $blocklistRules;

        return $this;
    }

    public function getKeeplistRules(): string
    {
        return $this->keeplistRules;
    }

    public function setKeeplistRules(string $keeplistRules): self
    {
        $this->initialized['keeplistRules'] = true;
        $this->keeplistRules = $keeplistRules;

        return $this;
    }

    public function getCrawler(): bool
    {
        return $this->crawler;
    }

    public function setCrawler(bool $crawler): self
    {
        $this->initialized['crawler'] = true;
        $this->crawler = $crawler;

        return $this;
    }

    public function getUserAgent(): string
    {
        return $this->userAgent;
    }

    public function setUserAgent(string $userAgent): self
    {
        $this->initialized['userAgent'] = true;
        $this->userAgent = $userAgent;

        return $this;
    }

    public function getCookie(): string
    {
        return $this->cookie;
    }

    public function setCookie(string $cookie): self
    {
        $this->initialized['cookie'] = true;
        $this->cookie = $cookie;

        return $this;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->initialized['username'] = true;
        $this->username = $username;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->initialized['password'] = true;
        $this->password = $password;

        return $this;
    }

    public function getCategoryId(): int
    {
        return $this->categoryId;
    }

    public function setCategoryId(int $categoryId): self
    {
        $this->initialized['categoryId'] = true;
        $this->categoryId = $categoryId;

        return $this;
    }

    public function getDisabled(): bool
    {
        return $this->disabled;
    }

    public function setDisabled(bool $disabled): self
    {
        $this->initialized['disabled'] = true;
        $this->disabled = $disabled;

        return $this;
    }

    public function getIgnoreHttpCache(): bool
    {
        return $this->ignoreHttpCache;
    }

    public function setIgnoreHttpCache(bool $ignoreHttpCache): self
    {
        $this->initialized['ignoreHttpCache'] = true;
        $this->ignoreHttpCache = $ignoreHttpCache;

        return $this;
    }

    public function getAllowSelfSignedCertificates(): bool
    {
        return $this->allowSelfSignedCertificates;
    }

    public function setAllowSelfSignedCertificates(bool $allowSelfSignedCertificates): self
    {
        $this->initialized['allowSelfSignedCertificates'] = true;
        $this->allowSelfSignedCertificates = $allowSelfSignedCertificates;

        return $this;
    }

    public function getFetchViaProxy(): bool
    {
        return $this->fetchViaProxy;
    }

    public function setFetchViaProxy(bool $fetchViaProxy): self
    {
        $this->initialized['fetchViaProxy'] = true;
        $this->fetchViaProxy = $fetchViaProxy;

        return $this;
    }

    public function getHideGlobally(): bool
    {
        return $this->hideGlobally;
    }

    public function setHideGlobally(bool $hideGlobally): self
    {
        $this->initialized['hideGlobally'] = true;
        $this->hideGlobally = $hideGlobally;

        return $this;
    }

    public function getDisableHttp2(): bool
    {
        return $this->disableHttp2;
    }

    public function setDisableHttp2(bool $disableHttp2): self
    {
        $this->initialized['disableHttp2'] = true;
        $this->disableHttp2 = $disableHttp2;

        return $this;
    }
}
