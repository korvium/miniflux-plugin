<?php

namespace Korvium\Plugin\Miniflux\Model;

class User extends \ArrayObject
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
     * @var string
     */
    protected $username;
    /**
     * @var string
     */
    protected $password;
    /**
     * @var bool
     */
    protected $isAdmin;
    /**
     * @var string
     */
    protected $theme;
    /**
     * @var string
     */
    protected $language;
    /**
     * @var string
     */
    protected $timezone;
    /**
     * @var string
     */
    protected $entryDirection;
    /**
     * @var string
     */
    protected $entryOrder;
    /**
     * @var string
     */
    protected $stylesheet;
    /**
     * @var string
     */
    protected $customJS;
    /**
     * @var string
     */
    protected $googleID;
    /**
     * @var string
     */
    protected $openIDConnectID;
    /**
     * @var int
     */
    protected $entriesPerPage;
    /**
     * @var bool
     */
    protected $keyboardShortcuts;
    /**
     * @var bool
     */
    protected $showReadingTime;
    /**
     * @var bool
     */
    protected $entrySwipe;
    /**
     * @var string
     */
    protected $gestureNav;
    /**
     * @var \DateTime
     */
    protected $lastLoginAt;
    /**
     * @var string
     */
    protected $displayMode;
    /**
     * @var int
     */
    protected $defaultReadingSpeed;
    /**
     * @var int
     */
    protected $cjkReadingSpeed;
    /**
     * @var string
     */
    protected $defaultHomePage;
    /**
     * @var string
     */
    protected $categoriesSortingOrder;
    /**
     * @var bool
     */
    protected $markReadOnView;
    /**
     * @var float
     */
    protected $mediaPlaybackRate;
    /**
     * @var string
     */
    protected $blockFilterEntryRules;
    /**
     * @var string
     */
    protected $keepFilterEntryRules;
    /**
     * @var string
     */
    protected $externalFontHosts;

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

    public function getIsAdmin(): bool
    {
        return $this->isAdmin;
    }

    public function setIsAdmin(bool $isAdmin): self
    {
        $this->initialized['isAdmin'] = true;
        $this->isAdmin = $isAdmin;

        return $this;
    }

    public function getTheme(): string
    {
        return $this->theme;
    }

    public function setTheme(string $theme): self
    {
        $this->initialized['theme'] = true;
        $this->theme = $theme;

        return $this;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    public function getTimezone(): string
    {
        return $this->timezone;
    }

    public function setTimezone(string $timezone): self
    {
        $this->initialized['timezone'] = true;
        $this->timezone = $timezone;

        return $this;
    }

    public function getEntryDirection(): string
    {
        return $this->entryDirection;
    }

    public function setEntryDirection(string $entryDirection): self
    {
        $this->initialized['entryDirection'] = true;
        $this->entryDirection = $entryDirection;

        return $this;
    }

    public function getEntryOrder(): string
    {
        return $this->entryOrder;
    }

    public function setEntryOrder(string $entryOrder): self
    {
        $this->initialized['entryOrder'] = true;
        $this->entryOrder = $entryOrder;

        return $this;
    }

    public function getStylesheet(): string
    {
        return $this->stylesheet;
    }

    public function setStylesheet(string $stylesheet): self
    {
        $this->initialized['stylesheet'] = true;
        $this->stylesheet = $stylesheet;

        return $this;
    }

    public function getCustomJS(): string
    {
        return $this->customJS;
    }

    public function setCustomJS(string $customJS): self
    {
        $this->initialized['customJS'] = true;
        $this->customJS = $customJS;

        return $this;
    }

    public function getGoogleID(): string
    {
        return $this->googleID;
    }

    public function setGoogleID(string $googleID): self
    {
        $this->initialized['googleID'] = true;
        $this->googleID = $googleID;

        return $this;
    }

    public function getOpenIDConnectID(): string
    {
        return $this->openIDConnectID;
    }

    public function setOpenIDConnectID(string $openIDConnectID): self
    {
        $this->initialized['openIDConnectID'] = true;
        $this->openIDConnectID = $openIDConnectID;

        return $this;
    }

    public function getEntriesPerPage(): int
    {
        return $this->entriesPerPage;
    }

    public function setEntriesPerPage(int $entriesPerPage): self
    {
        $this->initialized['entriesPerPage'] = true;
        $this->entriesPerPage = $entriesPerPage;

        return $this;
    }

    public function getKeyboardShortcuts(): bool
    {
        return $this->keyboardShortcuts;
    }

    public function setKeyboardShortcuts(bool $keyboardShortcuts): self
    {
        $this->initialized['keyboardShortcuts'] = true;
        $this->keyboardShortcuts = $keyboardShortcuts;

        return $this;
    }

    public function getShowReadingTime(): bool
    {
        return $this->showReadingTime;
    }

    public function setShowReadingTime(bool $showReadingTime): self
    {
        $this->initialized['showReadingTime'] = true;
        $this->showReadingTime = $showReadingTime;

        return $this;
    }

    public function getEntrySwipe(): bool
    {
        return $this->entrySwipe;
    }

    public function setEntrySwipe(bool $entrySwipe): self
    {
        $this->initialized['entrySwipe'] = true;
        $this->entrySwipe = $entrySwipe;

        return $this;
    }

    public function getGestureNav(): string
    {
        return $this->gestureNav;
    }

    public function setGestureNav(string $gestureNav): self
    {
        $this->initialized['gestureNav'] = true;
        $this->gestureNav = $gestureNav;

        return $this;
    }

    public function getLastLoginAt(): \DateTime
    {
        return $this->lastLoginAt;
    }

    public function setLastLoginAt(\DateTime $lastLoginAt): self
    {
        $this->initialized['lastLoginAt'] = true;
        $this->lastLoginAt = $lastLoginAt;

        return $this;
    }

    public function getDisplayMode(): string
    {
        return $this->displayMode;
    }

    public function setDisplayMode(string $displayMode): self
    {
        $this->initialized['displayMode'] = true;
        $this->displayMode = $displayMode;

        return $this;
    }

    public function getDefaultReadingSpeed(): int
    {
        return $this->defaultReadingSpeed;
    }

    public function setDefaultReadingSpeed(int $defaultReadingSpeed): self
    {
        $this->initialized['defaultReadingSpeed'] = true;
        $this->defaultReadingSpeed = $defaultReadingSpeed;

        return $this;
    }

    public function getCjkReadingSpeed(): int
    {
        return $this->cjkReadingSpeed;
    }

    public function setCjkReadingSpeed(int $cjkReadingSpeed): self
    {
        $this->initialized['cjkReadingSpeed'] = true;
        $this->cjkReadingSpeed = $cjkReadingSpeed;

        return $this;
    }

    public function getDefaultHomePage(): string
    {
        return $this->defaultHomePage;
    }

    public function setDefaultHomePage(string $defaultHomePage): self
    {
        $this->initialized['defaultHomePage'] = true;
        $this->defaultHomePage = $defaultHomePage;

        return $this;
    }

    public function getCategoriesSortingOrder(): string
    {
        return $this->categoriesSortingOrder;
    }

    public function setCategoriesSortingOrder(string $categoriesSortingOrder): self
    {
        $this->initialized['categoriesSortingOrder'] = true;
        $this->categoriesSortingOrder = $categoriesSortingOrder;

        return $this;
    }

    public function getMarkReadOnView(): bool
    {
        return $this->markReadOnView;
    }

    public function setMarkReadOnView(bool $markReadOnView): self
    {
        $this->initialized['markReadOnView'] = true;
        $this->markReadOnView = $markReadOnView;

        return $this;
    }

    public function getMediaPlaybackRate(): float
    {
        return $this->mediaPlaybackRate;
    }

    public function setMediaPlaybackRate(float $mediaPlaybackRate): self
    {
        $this->initialized['mediaPlaybackRate'] = true;
        $this->mediaPlaybackRate = $mediaPlaybackRate;

        return $this;
    }

    public function getBlockFilterEntryRules(): string
    {
        return $this->blockFilterEntryRules;
    }

    public function setBlockFilterEntryRules(string $blockFilterEntryRules): self
    {
        $this->initialized['blockFilterEntryRules'] = true;
        $this->blockFilterEntryRules = $blockFilterEntryRules;

        return $this;
    }

    public function getKeepFilterEntryRules(): string
    {
        return $this->keepFilterEntryRules;
    }

    public function setKeepFilterEntryRules(string $keepFilterEntryRules): self
    {
        $this->initialized['keepFilterEntryRules'] = true;
        $this->keepFilterEntryRules = $keepFilterEntryRules;

        return $this;
    }

    public function getExternalFontHosts(): string
    {
        return $this->externalFontHosts;
    }

    public function setExternalFontHosts(string $externalFontHosts): self
    {
        $this->initialized['externalFontHosts'] = true;
        $this->externalFontHosts = $externalFontHosts;

        return $this;
    }
}
