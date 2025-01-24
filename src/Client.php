<?php

namespace Korvium\Plugin\Miniflux;

class Client extends Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\VersionResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function getVersion(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetVersion(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\User|\Psr\Http\Message\ResponseInterface|null
     */
    public function getMe(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetMe(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\User[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getUsers(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetUsers(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\User|\Psr\Http\Message\ResponseInterface|null
     */
    public function postUser(Model\UserCreationRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\PostUser($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function deleteUserByUserId(int $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteUserByUserId($userId), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\User|\Psr\Http\Message\ResponseInterface|null
     */
    public function getUserByUserId(int $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetUserByUserId($userId), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\User|\Psr\Http\Message\ResponseInterface|null
     */
    public function putUserByUserId(int $userId, Model\UserModificationRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\PutUserByUserId($userId, $requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\User|\Psr\Http\Message\ResponseInterface|null
     */
    public function getUserByUsername(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetUserByUsername($username), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Category[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getCategories(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetCategories(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Category|\Psr\Http\Message\ResponseInterface|null
     */
    public function postCategory(Model\CategoriesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\PostCategory($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function deleteCategoryByCategoryId(int $categoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteCategoryByCategoryId($categoryId), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Category|\Psr\Http\Message\ResponseInterface|null
     */
    public function getCategoryByCategoryId(int $categoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetCategoryByCategoryId($categoryId), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Category|\Psr\Http\Message\ResponseInterface|null
     */
    public function putCategoryByCategoryId(int $categoryId, Model\CategoriesCategoryIdPutBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\PutCategoryByCategoryId($categoryId, $requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function putCategoriesByCategoryIdMarkAllAsRead(int $categoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\PutCategoriesByCategoryIdMarkAllAsRead($categoryId), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Feed[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getCategoriesByCategoryIdFeeds(int $categoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetCategoriesByCategoryIdFeeds($categoryId), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Entry|\Psr\Http\Message\ResponseInterface|null
     */
    public function getCategoriesByCategoryIdEntryByEntryId(int $categoryId, int $entryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetCategoriesByCategoryIdEntryByEntryId($categoryId, $entryId), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Feed[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getFeeds(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetFeeds(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Feed|\Psr\Http\Message\ResponseInterface|null
     */
    public function postFeed(Model\FeedCreationRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\PostFeed($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function deleteFeedByFeedId(int $feedId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteFeedByFeedId($feedId), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Feed|\Psr\Http\Message\ResponseInterface|null
     */
    public function getFeedByFeedId(int $feedId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetFeedByFeedId($feedId), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Feed|\Psr\Http\Message\ResponseInterface|null
     */
    public function putFeedByFeedId(int $feedId, Model\FeedModificationRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\PutFeedByFeedId($feedId, $requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\FeedIcon|\Psr\Http\Message\ResponseInterface|null
     */
    public function getFeedsByFeedIdIcon(int $feedId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetFeedsByFeedIdIcon($feedId), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Entry[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getFeedsByFeedIdEntries(int $feedId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetFeedsByFeedIdEntries($feedId), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Entry|\Psr\Http\Message\ResponseInterface|null
     */
    public function getFeedsByFeedIdEntryByEntryId(int $feedId, int $entryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetFeedsByFeedIdEntryByEntryId($feedId, $entryId), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function putFeedsRefresh(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\PutFeedsRefresh(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function putFeedsByFeedIdRefresh(int $feedId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\PutFeedsByFeedIdRefresh($feedId), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function putFeedsByFeedIdMarkAllAsRead(int $feedId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\PutFeedsByFeedIdMarkAllAsRead($feedId), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Entry[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getEntries(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetEntries(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function putEntry(Model\EntriesPutBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\PutEntry($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Entry|\Psr\Http\Message\ResponseInterface|null
     */
    public function getEntryByEntryId(int $entryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetEntryByEntryId($entryId), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Entry|\Psr\Http\Message\ResponseInterface|null
     */
    public function putEntryByEntryId(int $entryId, Model\EntryModificationRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\PutEntryByEntryId($entryId, $requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function putEntriesByEntryIdBookmark(int $entryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\PutEntriesByEntryIdBookmark($entryId), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function postEntriesByEntryIdSave(int $entryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\PostEntriesByEntryIdSave($entryId), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\EntriesEntryIdFetchContentGetResponse200|\Psr\Http\Message\ResponseInterface|null
     */
    public function getEntriesByEntryIdFetchContent(int $entryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetEntriesByEntryIdFetchContent($entryId), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\IntegrationsStatusGetResponse200|\Psr\Http\Message\ResponseInterface|null
     */
    public function getIntegrationsStatus(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetIntegrationsStatus(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Subscription[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function postDiscover(Model\DiscoverPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\PostDiscover($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function getExport(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetExport(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function postImport(string $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\PostImport($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function putFlushHistory(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\PutFlushHistory(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\FeedIcon|\Psr\Http\Message\ResponseInterface|null
     */
    public function getIconByIconId(int $iconId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetIconByIconId($iconId), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Enclosure|\Psr\Http\Message\ResponseInterface|null
     */
    public function getEnclosureByEnclosureId(int $enclosureId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetEnclosureByEnclosureId($enclosureId), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function putEnclosureByEnclosureId(int $enclosureId, Model\EnclosureUpdateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\PutEnclosureByEnclosureId($enclosureId, $requestBody), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://reader.miniflux.app/v1');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
