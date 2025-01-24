<?php

namespace Korvium\Plugin\Miniflux\Endpoint;

class GetFeedsByFeedIdEntryByEntryId extends \Korvium\Plugin\Miniflux\Runtime\Client\BaseEndpoint implements \Korvium\Plugin\Miniflux\Runtime\Client\Endpoint
{
    use \Korvium\Plugin\Miniflux\Runtime\Client\EndpointTrait;
    protected $feedId;
    protected $entryId;

    public function __construct(int $feedId, int $entryId)
    {
        $this->feedId = $feedId;
        $this->entryId = $entryId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{feedId}', '{entryId}'], [$this->feedId, $this->entryId], '/feeds/{feedId}/entries/{entryId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return \Korvium\Plugin\Miniflux\Model\Entry|null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Korvium\Plugin\Miniflux\Model\Entry', 'json');
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
