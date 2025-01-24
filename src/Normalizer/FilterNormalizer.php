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
    class FilterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \Korvium\Plugin\Miniflux\Model\Filter::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \Korvium\Plugin\Miniflux\Model\Filter::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Korvium\Plugin\Miniflux\Model\Filter();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('offset', $data)) {
                $object->setOffset($data['offset']);
                unset($data['offset']);
            }
            if (\array_key_exists('limit', $data)) {
                $object->setLimit($data['limit']);
                unset($data['limit']);
            }
            if (\array_key_exists('order', $data)) {
                $object->setOrder($data['order']);
                unset($data['order']);
            }
            if (\array_key_exists('direction', $data)) {
                $object->setDirection($data['direction']);
                unset($data['direction']);
            }
            if (\array_key_exists('starred', $data)) {
                $object->setStarred($data['starred']);
                unset($data['starred']);
            }
            if (\array_key_exists('before', $data)) {
                $object->setBefore($data['before']);
                unset($data['before']);
            }
            if (\array_key_exists('after', $data)) {
                $object->setAfter($data['after']);
                unset($data['after']);
            }
            if (\array_key_exists('publishedBefore', $data)) {
                $object->setPublishedBefore($data['publishedBefore']);
                unset($data['publishedBefore']);
            }
            if (\array_key_exists('publishedAfter', $data)) {
                $object->setPublishedAfter($data['publishedAfter']);
                unset($data['publishedAfter']);
            }
            if (\array_key_exists('changedBefore', $data)) {
                $object->setChangedBefore($data['changedBefore']);
                unset($data['changedBefore']);
            }
            if (\array_key_exists('changedAfter', $data)) {
                $object->setChangedAfter($data['changedAfter']);
                unset($data['changedAfter']);
            }
            if (\array_key_exists('beforeEntryID', $data)) {
                $object->setBeforeEntryID($data['beforeEntryID']);
                unset($data['beforeEntryID']);
            }
            if (\array_key_exists('afterEntryID', $data)) {
                $object->setAfterEntryID($data['afterEntryID']);
                unset($data['afterEntryID']);
            }
            if (\array_key_exists('search', $data)) {
                $object->setSearch($data['search']);
                unset($data['search']);
            }
            if (\array_key_exists('categoryID', $data)) {
                $object->setCategoryID($data['categoryID']);
                unset($data['categoryID']);
            }
            if (\array_key_exists('feedID', $data)) {
                $object->setFeedID($data['feedID']);
                unset($data['feedID']);
            }
            if (\array_key_exists('statuses', $data)) {
                $values = [];
                foreach ($data['statuses'] as $value) {
                    $values[] = $value;
                }
                $object->setStatuses($values);
                unset($data['statuses']);
            }
            if (\array_key_exists('globallyVisible', $data)) {
                $object->setGloballyVisible($data['globallyVisible']);
                unset($data['globallyVisible']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('offset') && null !== $object->getOffset()) {
                $data['offset'] = $object->getOffset();
            }
            if ($object->isInitialized('limit') && null !== $object->getLimit()) {
                $data['limit'] = $object->getLimit();
            }
            if ($object->isInitialized('order') && null !== $object->getOrder()) {
                $data['order'] = $object->getOrder();
            }
            if ($object->isInitialized('direction') && null !== $object->getDirection()) {
                $data['direction'] = $object->getDirection();
            }
            if ($object->isInitialized('starred') && null !== $object->getStarred()) {
                $data['starred'] = $object->getStarred();
            }
            if ($object->isInitialized('before') && null !== $object->getBefore()) {
                $data['before'] = $object->getBefore();
            }
            if ($object->isInitialized('after') && null !== $object->getAfter()) {
                $data['after'] = $object->getAfter();
            }
            if ($object->isInitialized('publishedBefore') && null !== $object->getPublishedBefore()) {
                $data['publishedBefore'] = $object->getPublishedBefore();
            }
            if ($object->isInitialized('publishedAfter') && null !== $object->getPublishedAfter()) {
                $data['publishedAfter'] = $object->getPublishedAfter();
            }
            if ($object->isInitialized('changedBefore') && null !== $object->getChangedBefore()) {
                $data['changedBefore'] = $object->getChangedBefore();
            }
            if ($object->isInitialized('changedAfter') && null !== $object->getChangedAfter()) {
                $data['changedAfter'] = $object->getChangedAfter();
            }
            if ($object->isInitialized('beforeEntryID') && null !== $object->getBeforeEntryID()) {
                $data['beforeEntryID'] = $object->getBeforeEntryID();
            }
            if ($object->isInitialized('afterEntryID') && null !== $object->getAfterEntryID()) {
                $data['afterEntryID'] = $object->getAfterEntryID();
            }
            if ($object->isInitialized('search') && null !== $object->getSearch()) {
                $data['search'] = $object->getSearch();
            }
            if ($object->isInitialized('categoryID') && null !== $object->getCategoryID()) {
                $data['categoryID'] = $object->getCategoryID();
            }
            if ($object->isInitialized('feedID') && null !== $object->getFeedID()) {
                $data['feedID'] = $object->getFeedID();
            }
            if ($object->isInitialized('statuses') && null !== $object->getStatuses()) {
                $values = [];
                foreach ($object->getStatuses() as $value) {
                    $values[] = $value;
                }
                $data['statuses'] = $values;
            }
            if ($object->isInitialized('globallyVisible') && null !== $object->getGloballyVisible()) {
                $data['globallyVisible'] = $object->getGloballyVisible();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Korvium\Plugin\Miniflux\Model\Filter::class => false];
        }
    }
} else {
    class FilterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \Korvium\Plugin\Miniflux\Model\Filter::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \Korvium\Plugin\Miniflux\Model\Filter::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Korvium\Plugin\Miniflux\Model\Filter();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('offset', $data)) {
                $object->setOffset($data['offset']);
                unset($data['offset']);
            }
            if (\array_key_exists('limit', $data)) {
                $object->setLimit($data['limit']);
                unset($data['limit']);
            }
            if (\array_key_exists('order', $data)) {
                $object->setOrder($data['order']);
                unset($data['order']);
            }
            if (\array_key_exists('direction', $data)) {
                $object->setDirection($data['direction']);
                unset($data['direction']);
            }
            if (\array_key_exists('starred', $data)) {
                $object->setStarred($data['starred']);
                unset($data['starred']);
            }
            if (\array_key_exists('before', $data)) {
                $object->setBefore($data['before']);
                unset($data['before']);
            }
            if (\array_key_exists('after', $data)) {
                $object->setAfter($data['after']);
                unset($data['after']);
            }
            if (\array_key_exists('publishedBefore', $data)) {
                $object->setPublishedBefore($data['publishedBefore']);
                unset($data['publishedBefore']);
            }
            if (\array_key_exists('publishedAfter', $data)) {
                $object->setPublishedAfter($data['publishedAfter']);
                unset($data['publishedAfter']);
            }
            if (\array_key_exists('changedBefore', $data)) {
                $object->setChangedBefore($data['changedBefore']);
                unset($data['changedBefore']);
            }
            if (\array_key_exists('changedAfter', $data)) {
                $object->setChangedAfter($data['changedAfter']);
                unset($data['changedAfter']);
            }
            if (\array_key_exists('beforeEntryID', $data)) {
                $object->setBeforeEntryID($data['beforeEntryID']);
                unset($data['beforeEntryID']);
            }
            if (\array_key_exists('afterEntryID', $data)) {
                $object->setAfterEntryID($data['afterEntryID']);
                unset($data['afterEntryID']);
            }
            if (\array_key_exists('search', $data)) {
                $object->setSearch($data['search']);
                unset($data['search']);
            }
            if (\array_key_exists('categoryID', $data)) {
                $object->setCategoryID($data['categoryID']);
                unset($data['categoryID']);
            }
            if (\array_key_exists('feedID', $data)) {
                $object->setFeedID($data['feedID']);
                unset($data['feedID']);
            }
            if (\array_key_exists('statuses', $data)) {
                $values = [];
                foreach ($data['statuses'] as $value) {
                    $values[] = $value;
                }
                $object->setStatuses($values);
                unset($data['statuses']);
            }
            if (\array_key_exists('globallyVisible', $data)) {
                $object->setGloballyVisible($data['globallyVisible']);
                unset($data['globallyVisible']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('offset') && null !== $object->getOffset()) {
                $data['offset'] = $object->getOffset();
            }
            if ($object->isInitialized('limit') && null !== $object->getLimit()) {
                $data['limit'] = $object->getLimit();
            }
            if ($object->isInitialized('order') && null !== $object->getOrder()) {
                $data['order'] = $object->getOrder();
            }
            if ($object->isInitialized('direction') && null !== $object->getDirection()) {
                $data['direction'] = $object->getDirection();
            }
            if ($object->isInitialized('starred') && null !== $object->getStarred()) {
                $data['starred'] = $object->getStarred();
            }
            if ($object->isInitialized('before') && null !== $object->getBefore()) {
                $data['before'] = $object->getBefore();
            }
            if ($object->isInitialized('after') && null !== $object->getAfter()) {
                $data['after'] = $object->getAfter();
            }
            if ($object->isInitialized('publishedBefore') && null !== $object->getPublishedBefore()) {
                $data['publishedBefore'] = $object->getPublishedBefore();
            }
            if ($object->isInitialized('publishedAfter') && null !== $object->getPublishedAfter()) {
                $data['publishedAfter'] = $object->getPublishedAfter();
            }
            if ($object->isInitialized('changedBefore') && null !== $object->getChangedBefore()) {
                $data['changedBefore'] = $object->getChangedBefore();
            }
            if ($object->isInitialized('changedAfter') && null !== $object->getChangedAfter()) {
                $data['changedAfter'] = $object->getChangedAfter();
            }
            if ($object->isInitialized('beforeEntryID') && null !== $object->getBeforeEntryID()) {
                $data['beforeEntryID'] = $object->getBeforeEntryID();
            }
            if ($object->isInitialized('afterEntryID') && null !== $object->getAfterEntryID()) {
                $data['afterEntryID'] = $object->getAfterEntryID();
            }
            if ($object->isInitialized('search') && null !== $object->getSearch()) {
                $data['search'] = $object->getSearch();
            }
            if ($object->isInitialized('categoryID') && null !== $object->getCategoryID()) {
                $data['categoryID'] = $object->getCategoryID();
            }
            if ($object->isInitialized('feedID') && null !== $object->getFeedID()) {
                $data['feedID'] = $object->getFeedID();
            }
            if ($object->isInitialized('statuses') && null !== $object->getStatuses()) {
                $values = [];
                foreach ($object->getStatuses() as $value) {
                    $values[] = $value;
                }
                $data['statuses'] = $values;
            }
            if ($object->isInitialized('globallyVisible') && null !== $object->getGloballyVisible()) {
                $data['globallyVisible'] = $object->getGloballyVisible();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Korvium\Plugin\Miniflux\Model\Filter::class => false];
        }
    }
}
