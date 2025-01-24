<?php

namespace Korvium\Plugin\Miniflux\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Korvium\Plugin\Miniflux\Runtime\Normalizer\CheckArray;
use Korvium\Plugin\Miniflux\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class EntryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \Korvium\Plugin\Miniflux\Model\Entry::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \Korvium\Plugin\Miniflux\Model\Entry::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Korvium\Plugin\Miniflux\Model\Entry();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('publishedAt', $data)) {
                $object->setPublishedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['publishedAt']));
                unset($data['publishedAt']);
            }
            if (\array_key_exists('changedAt', $data)) {
                $object->setChangedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['changedAt']));
                unset($data['changedAt']);
            }
            if (\array_key_exists('createdAt', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createdAt']));
                unset($data['createdAt']);
            }
            if (\array_key_exists('feed', $data)) {
                $object->setFeed($this->denormalizer->denormalize($data['feed'], \Korvium\Plugin\Miniflux\Model\Feed::class, 'json', $context));
                unset($data['feed']);
            }
            if (\array_key_exists('hash', $data)) {
                $object->setHash($data['hash']);
                unset($data['hash']);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('commentsUrl', $data)) {
                $object->setCommentsUrl($data['commentsUrl']);
                unset($data['commentsUrl']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('content', $data)) {
                $object->setContent($data['content']);
                unset($data['content']);
            }
            if (\array_key_exists('author', $data)) {
                $object->setAuthor($data['author']);
                unset($data['author']);
            }
            if (\array_key_exists('shareCode', $data)) {
                $object->setShareCode($data['shareCode']);
                unset($data['shareCode']);
            }
            if (\array_key_exists('enclosures', $data)) {
                $values = [];
                foreach ($data['enclosures'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Korvium\Plugin\Miniflux\Model\Enclosure::class, 'json', $context);
                }
                $object->setEnclosures($values);
                unset($data['enclosures']);
            }
            if (\array_key_exists('tags', $data)) {
                $values_1 = [];
                foreach ($data['tags'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setTags($values_1);
                unset($data['tags']);
            }
            if (\array_key_exists('readingTime', $data)) {
                $object->setReadingTime($data['readingTime']);
                unset($data['readingTime']);
            }
            if (\array_key_exists('userId', $data)) {
                $object->setUserId($data['userId']);
                unset($data['userId']);
            }
            if (\array_key_exists('feedId', $data)) {
                $object->setFeedId($data['feedId']);
                unset($data['feedId']);
            }
            if (\array_key_exists('starred', $data)) {
                $object->setStarred($data['starred']);
                unset($data['starred']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('publishedAt') && null !== $object->getPublishedAt()) {
                $data['publishedAt'] = $object->getPublishedAt()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('changedAt') && null !== $object->getChangedAt()) {
                $data['changedAt'] = $object->getChangedAt()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['createdAt'] = $object->getCreatedAt()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('feed') && null !== $object->getFeed()) {
                $data['feed'] = $this->normalizer->normalize($object->getFeed(), 'json', $context);
            }
            if ($object->isInitialized('hash') && null !== $object->getHash()) {
                $data['hash'] = $object->getHash();
            }
            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
            }
            if ($object->isInitialized('commentsUrl') && null !== $object->getCommentsUrl()) {
                $data['commentsUrl'] = $object->getCommentsUrl();
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('content') && null !== $object->getContent()) {
                $data['content'] = $object->getContent();
            }
            if ($object->isInitialized('author') && null !== $object->getAuthor()) {
                $data['author'] = $object->getAuthor();
            }
            if ($object->isInitialized('shareCode') && null !== $object->getShareCode()) {
                $data['shareCode'] = $object->getShareCode();
            }
            if ($object->isInitialized('enclosures') && null !== $object->getEnclosures()) {
                $values = [];
                foreach ($object->getEnclosures() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['enclosures'] = $values;
            }
            if ($object->isInitialized('tags') && null !== $object->getTags()) {
                $values_1 = [];
                foreach ($object->getTags() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['tags'] = $values_1;
            }
            if ($object->isInitialized('readingTime') && null !== $object->getReadingTime()) {
                $data['readingTime'] = $object->getReadingTime();
            }
            if ($object->isInitialized('userId') && null !== $object->getUserId()) {
                $data['userId'] = $object->getUserId();
            }
            if ($object->isInitialized('feedId') && null !== $object->getFeedId()) {
                $data['feedId'] = $object->getFeedId();
            }
            if ($object->isInitialized('starred') && null !== $object->getStarred()) {
                $data['starred'] = $object->getStarred();
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Korvium\Plugin\Miniflux\Model\Entry::class => false];
        }
    }
} else {
    class EntryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \Korvium\Plugin\Miniflux\Model\Entry::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \Korvium\Plugin\Miniflux\Model\Entry::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Korvium\Plugin\Miniflux\Model\Entry();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('publishedAt', $data)) {
                $object->setPublishedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['publishedAt']));
                unset($data['publishedAt']);
            }
            if (\array_key_exists('changedAt', $data)) {
                $object->setChangedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['changedAt']));
                unset($data['changedAt']);
            }
            if (\array_key_exists('createdAt', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createdAt']));
                unset($data['createdAt']);
            }
            if (\array_key_exists('feed', $data)) {
                $object->setFeed($this->denormalizer->denormalize($data['feed'], \Korvium\Plugin\Miniflux\Model\Feed::class, 'json', $context));
                unset($data['feed']);
            }
            if (\array_key_exists('hash', $data)) {
                $object->setHash($data['hash']);
                unset($data['hash']);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('commentsUrl', $data)) {
                $object->setCommentsUrl($data['commentsUrl']);
                unset($data['commentsUrl']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('content', $data)) {
                $object->setContent($data['content']);
                unset($data['content']);
            }
            if (\array_key_exists('author', $data)) {
                $object->setAuthor($data['author']);
                unset($data['author']);
            }
            if (\array_key_exists('shareCode', $data)) {
                $object->setShareCode($data['shareCode']);
                unset($data['shareCode']);
            }
            if (\array_key_exists('enclosures', $data)) {
                $values = [];
                foreach ($data['enclosures'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Korvium\Plugin\Miniflux\Model\Enclosure::class, 'json', $context);
                }
                $object->setEnclosures($values);
                unset($data['enclosures']);
            }
            if (\array_key_exists('tags', $data)) {
                $values_1 = [];
                foreach ($data['tags'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setTags($values_1);
                unset($data['tags']);
            }
            if (\array_key_exists('readingTime', $data)) {
                $object->setReadingTime($data['readingTime']);
                unset($data['readingTime']);
            }
            if (\array_key_exists('userId', $data)) {
                $object->setUserId($data['userId']);
                unset($data['userId']);
            }
            if (\array_key_exists('feedId', $data)) {
                $object->setFeedId($data['feedId']);
                unset($data['feedId']);
            }
            if (\array_key_exists('starred', $data)) {
                $object->setStarred($data['starred']);
                unset($data['starred']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('publishedAt') && null !== $object->getPublishedAt()) {
                $data['publishedAt'] = $object->getPublishedAt()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('changedAt') && null !== $object->getChangedAt()) {
                $data['changedAt'] = $object->getChangedAt()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['createdAt'] = $object->getCreatedAt()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('feed') && null !== $object->getFeed()) {
                $data['feed'] = $this->normalizer->normalize($object->getFeed(), 'json', $context);
            }
            if ($object->isInitialized('hash') && null !== $object->getHash()) {
                $data['hash'] = $object->getHash();
            }
            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
            }
            if ($object->isInitialized('commentsUrl') && null !== $object->getCommentsUrl()) {
                $data['commentsUrl'] = $object->getCommentsUrl();
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('content') && null !== $object->getContent()) {
                $data['content'] = $object->getContent();
            }
            if ($object->isInitialized('author') && null !== $object->getAuthor()) {
                $data['author'] = $object->getAuthor();
            }
            if ($object->isInitialized('shareCode') && null !== $object->getShareCode()) {
                $data['shareCode'] = $object->getShareCode();
            }
            if ($object->isInitialized('enclosures') && null !== $object->getEnclosures()) {
                $values = [];
                foreach ($object->getEnclosures() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['enclosures'] = $values;
            }
            if ($object->isInitialized('tags') && null !== $object->getTags()) {
                $values_1 = [];
                foreach ($object->getTags() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['tags'] = $values_1;
            }
            if ($object->isInitialized('readingTime') && null !== $object->getReadingTime()) {
                $data['readingTime'] = $object->getReadingTime();
            }
            if ($object->isInitialized('userId') && null !== $object->getUserId()) {
                $data['userId'] = $object->getUserId();
            }
            if ($object->isInitialized('feedId') && null !== $object->getFeedId()) {
                $data['feedId'] = $object->getFeedId();
            }
            if ($object->isInitialized('starred') && null !== $object->getStarred()) {
                $data['starred'] = $object->getStarred();
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Korvium\Plugin\Miniflux\Model\Entry::class => false];
        }
    }
}
