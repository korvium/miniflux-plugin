<?php

namespace Korvium\Plugin\Miniflux\Normalizer;

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
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        protected $normalizers = [
            \Korvium\Plugin\Miniflux\Model\VersionResponse::class => VersionResponseNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\User::class => UserNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\UserCreationRequest::class => UserCreationRequestNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\UserModificationRequest::class => UserModificationRequestNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\Category::class => CategoryNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\Feed::class => FeedNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\FeedCreationRequest::class => FeedCreationRequestNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\FeedModificationRequest::class => FeedModificationRequestNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\FeedIcon::class => FeedIconNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\Entry::class => EntryNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\EntryModificationRequest::class => EntryModificationRequestNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\Enclosure::class => EnclosureNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\EnclosureUpdateRequest::class => EnclosureUpdateRequestNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\Subscription::class => SubscriptionNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\FeedCounters::class => FeedCountersNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\EntryResultSet::class => EntryResultSetNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\Filter::class => FilterNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\CategoriesPostBody::class => CategoriesPostBodyNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\CategoriesCategoryIdPutBody::class => CategoriesCategoryIdPutBodyNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\EntriesPutBody::class => EntriesPutBodyNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\EntriesEntryIdFetchContentGetResponse200::class => EntriesEntryIdFetchContentGetResponse200Normalizer::class,

            \Korvium\Plugin\Miniflux\Model\IntegrationsStatusGetResponse200::class => IntegrationsStatusGetResponse200Normalizer::class,

            \Korvium\Plugin\Miniflux\Model\DiscoverPostBody::class => DiscoverPostBodyNormalizer::class,

            \Jane\Component\JsonSchemaRuntime\Reference::class => \Korvium\Plugin\Miniflux\Runtime\Normalizer\ReferenceNormalizer::class,
        ];
        protected $normalizersCache = [];

        public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
        {
            return array_key_exists($type, $this->normalizers);
        }

        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);

            return $normalizer->normalize($object, $format, $context);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);

            return $denormalizer->denormalize($data, $type, $format, $context);
        }

        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }

        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;

            return $normalizer;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [
                \Korvium\Plugin\Miniflux\Model\VersionResponse::class => false,
                \Korvium\Plugin\Miniflux\Model\User::class => false,
                \Korvium\Plugin\Miniflux\Model\UserCreationRequest::class => false,
                \Korvium\Plugin\Miniflux\Model\UserModificationRequest::class => false,
                \Korvium\Plugin\Miniflux\Model\Category::class => false,
                \Korvium\Plugin\Miniflux\Model\Feed::class => false,
                \Korvium\Plugin\Miniflux\Model\FeedCreationRequest::class => false,
                \Korvium\Plugin\Miniflux\Model\FeedModificationRequest::class => false,
                \Korvium\Plugin\Miniflux\Model\FeedIcon::class => false,
                \Korvium\Plugin\Miniflux\Model\Entry::class => false,
                \Korvium\Plugin\Miniflux\Model\EntryModificationRequest::class => false,
                \Korvium\Plugin\Miniflux\Model\Enclosure::class => false,
                \Korvium\Plugin\Miniflux\Model\EnclosureUpdateRequest::class => false,
                \Korvium\Plugin\Miniflux\Model\Subscription::class => false,
                \Korvium\Plugin\Miniflux\Model\FeedCounters::class => false,
                \Korvium\Plugin\Miniflux\Model\EntryResultSet::class => false,
                \Korvium\Plugin\Miniflux\Model\Filter::class => false,
                \Korvium\Plugin\Miniflux\Model\CategoriesPostBody::class => false,
                \Korvium\Plugin\Miniflux\Model\CategoriesCategoryIdPutBody::class => false,
                \Korvium\Plugin\Miniflux\Model\EntriesPutBody::class => false,
                \Korvium\Plugin\Miniflux\Model\EntriesEntryIdFetchContentGetResponse200::class => false,
                \Korvium\Plugin\Miniflux\Model\IntegrationsStatusGetResponse200::class => false,
                \Korvium\Plugin\Miniflux\Model\DiscoverPostBody::class => false,
                \Jane\Component\JsonSchemaRuntime\Reference::class => false,
            ];
        }
    }
} else {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        protected $normalizers = [
            \Korvium\Plugin\Miniflux\Model\VersionResponse::class => VersionResponseNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\User::class => UserNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\UserCreationRequest::class => UserCreationRequestNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\UserModificationRequest::class => UserModificationRequestNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\Category::class => CategoryNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\Feed::class => FeedNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\FeedCreationRequest::class => FeedCreationRequestNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\FeedModificationRequest::class => FeedModificationRequestNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\FeedIcon::class => FeedIconNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\Entry::class => EntryNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\EntryModificationRequest::class => EntryModificationRequestNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\Enclosure::class => EnclosureNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\EnclosureUpdateRequest::class => EnclosureUpdateRequestNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\Subscription::class => SubscriptionNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\FeedCounters::class => FeedCountersNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\EntryResultSet::class => EntryResultSetNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\Filter::class => FilterNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\CategoriesPostBody::class => CategoriesPostBodyNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\CategoriesCategoryIdPutBody::class => CategoriesCategoryIdPutBodyNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\EntriesPutBody::class => EntriesPutBodyNormalizer::class,

            \Korvium\Plugin\Miniflux\Model\EntriesEntryIdFetchContentGetResponse200::class => EntriesEntryIdFetchContentGetResponse200Normalizer::class,

            \Korvium\Plugin\Miniflux\Model\IntegrationsStatusGetResponse200::class => IntegrationsStatusGetResponse200Normalizer::class,

            \Korvium\Plugin\Miniflux\Model\DiscoverPostBody::class => DiscoverPostBodyNormalizer::class,

            \Jane\Component\JsonSchemaRuntime\Reference::class => \Korvium\Plugin\Miniflux\Runtime\Normalizer\ReferenceNormalizer::class,
        ];
        protected $normalizersCache = [];

        public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
        {
            return array_key_exists($type, $this->normalizers);
        }

        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);

            return $normalizer->normalize($object, $format, $context);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);

            return $denormalizer->denormalize($data, $type, $format, $context);
        }

        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }

        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;

            return $normalizer;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [
                \Korvium\Plugin\Miniflux\Model\VersionResponse::class => false,
                \Korvium\Plugin\Miniflux\Model\User::class => false,
                \Korvium\Plugin\Miniflux\Model\UserCreationRequest::class => false,
                \Korvium\Plugin\Miniflux\Model\UserModificationRequest::class => false,
                \Korvium\Plugin\Miniflux\Model\Category::class => false,
                \Korvium\Plugin\Miniflux\Model\Feed::class => false,
                \Korvium\Plugin\Miniflux\Model\FeedCreationRequest::class => false,
                \Korvium\Plugin\Miniflux\Model\FeedModificationRequest::class => false,
                \Korvium\Plugin\Miniflux\Model\FeedIcon::class => false,
                \Korvium\Plugin\Miniflux\Model\Entry::class => false,
                \Korvium\Plugin\Miniflux\Model\EntryModificationRequest::class => false,
                \Korvium\Plugin\Miniflux\Model\Enclosure::class => false,
                \Korvium\Plugin\Miniflux\Model\EnclosureUpdateRequest::class => false,
                \Korvium\Plugin\Miniflux\Model\Subscription::class => false,
                \Korvium\Plugin\Miniflux\Model\FeedCounters::class => false,
                \Korvium\Plugin\Miniflux\Model\EntryResultSet::class => false,
                \Korvium\Plugin\Miniflux\Model\Filter::class => false,
                \Korvium\Plugin\Miniflux\Model\CategoriesPostBody::class => false,
                \Korvium\Plugin\Miniflux\Model\CategoriesCategoryIdPutBody::class => false,
                \Korvium\Plugin\Miniflux\Model\EntriesPutBody::class => false,
                \Korvium\Plugin\Miniflux\Model\EntriesEntryIdFetchContentGetResponse200::class => false,
                \Korvium\Plugin\Miniflux\Model\IntegrationsStatusGetResponse200::class => false,
                \Korvium\Plugin\Miniflux\Model\DiscoverPostBody::class => false,
                \Jane\Component\JsonSchemaRuntime\Reference::class => false,
            ];
        }
    }
}
