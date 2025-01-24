<?php

namespace Korvium\Plugin\Miniflux\Model;

class UserCreationRequest extends \ArrayObject
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
    protected $googleID;
    /**
     * @var string
     */
    protected $openIDConnectID;

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
}
