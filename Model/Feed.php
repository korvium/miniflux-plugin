<?php

namespace Korvium\Plugin\Miniflux\Model;

class Feed extends \ArrayObject
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
     * @var \DateTime
     */
    protected $checkedAt;
    /**
     * @var string
     */
    protected $etagHeader;
    /**
     * @var string
     */
    protected $lastModifiedHeader;
    /**
     * @var string
     */
    protected $parsingErrorMessage;
    /**
     * @var int
     */
    protected $parsingErrorCount;
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
     * @var Category
     */
    protected $category;
    /**
     * @var bool
     */
    protected $hideGlobally;
    /**
     * @var bool
     */
    protected $disableHttp2;

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

    public function getCheckedAt(): \DateTime
    {
        return $this->checkedAt;
    }

    public function setCheckedAt(\DateTime $checkedAt): self
    {
        $this->initialized['checkedAt'] = true;
        $this->checkedAt = $checkedAt;

        return $this;
    }

    public function getEtagHeader(): string
    {
        return $this->etagHeader;
    }

    public function setEtagHeader(string $etagHeader): self
    {
        $this->initialized['etagHeader'] = true;
        $this->etagHeader = $etagHeader;

        return $this;
    }

    public function getLastModifiedHeader(): string
    {
        return $this->lastModifiedHeader;
    }

    public function setLastModifiedHeader(string $lastModifiedHeader): self
    {
        $this->initialized['lastModifiedHeader'] = true;
        $this->lastModifiedHeader = $lastModifiedHeader;

        return $this;
    }

    public function getParsingErrorMessage(): string
    {
        return $this->parsingErrorMessage;
    }

    public function setParsingErrorMessage(string $parsingErrorMessage): self
    {
        $this->initialized['parsingErrorMessage'] = true;
        $this->parsingErrorMessage = $parsingErrorMessage;

        return $this;
    }

    public function getParsingErrorCount(): int
    {
        return $this->parsingErrorCount;
    }

    public function setParsingErrorCount(int $parsingErrorCount): self
    {
        $this->initialized['parsingErrorCount'] = true;
        $this->parsingErrorCount = $parsingErrorCount;

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

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function setCategory(Category $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;

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
