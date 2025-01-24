<?php

namespace Korvium\Plugin\Miniflux\Endpoint;

class PutEntriesByEntryIdBookmark extends \Korvium\Plugin\Miniflux\Runtime\Client\BaseEndpoint implements \Korvium\Plugin\Miniflux\Runtime\Client\Endpoint
{
    use \Korvium\Plugin\Miniflux\Runtime\Client\EndpointTrait;
    protected $entryId;

    public function __construct(int $entryId)
    {
        $this->entryId = $entryId;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{entryId}'], [$this->entryId], '/entries/{entryId}/bookmark');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    /**
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
