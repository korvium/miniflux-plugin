<?php

namespace Korvium\Plugin\Miniflux\Endpoint;

class PutEntryByEntryId extends \Korvium\Plugin\Miniflux\Runtime\Client\BaseEndpoint implements \Korvium\Plugin\Miniflux\Runtime\Client\Endpoint
{
    use \Korvium\Plugin\Miniflux\Runtime\Client\EndpointTrait;
    protected $entryId;

    public function __construct(int $entryId, \Korvium\Plugin\Miniflux\Model\EntryModificationRequest $requestBody)
    {
        $this->entryId = $entryId;
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{entryId}'], [$this->entryId], '/entries/{entryId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Korvium\Plugin\Miniflux\Model\EntryModificationRequest) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

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
        if (false === is_null($contentType) && (201 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Korvium\Plugin\Miniflux\Model\Entry', 'json');
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
