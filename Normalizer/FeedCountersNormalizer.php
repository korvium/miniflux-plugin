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
    class FeedCountersNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \Korvium\Plugin\Miniflux\Model\FeedCounters::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \Korvium\Plugin\Miniflux\Model\FeedCounters::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Korvium\Plugin\Miniflux\Model\FeedCounters();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('readCounters', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['readCounters'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setReadCounters($values);
                unset($data['readCounters']);
            }
            if (\array_key_exists('unreadCounters', $data)) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['unreadCounters'] as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $object->setUnreadCounters($values_1);
                unset($data['unreadCounters']);
            }
            foreach ($data as $key_2 => $value_2) {
                if (preg_match('/.*/', (string) $key_2)) {
                    $object[$key_2] = $value_2;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('readCounters') && null !== $object->getReadCounters()) {
                $values = [];
                foreach ($object->getReadCounters() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['readCounters'] = $values;
            }
            if ($object->isInitialized('unreadCounters') && null !== $object->getUnreadCounters()) {
                $values_1 = [];
                foreach ($object->getUnreadCounters() as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $data['unreadCounters'] = $values_1;
            }
            foreach ($object as $key_2 => $value_2) {
                if (preg_match('/.*/', (string) $key_2)) {
                    $data[$key_2] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Korvium\Plugin\Miniflux\Model\FeedCounters::class => false];
        }
    }
} else {
    class FeedCountersNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \Korvium\Plugin\Miniflux\Model\FeedCounters::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \Korvium\Plugin\Miniflux\Model\FeedCounters::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Korvium\Plugin\Miniflux\Model\FeedCounters();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('readCounters', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['readCounters'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setReadCounters($values);
                unset($data['readCounters']);
            }
            if (\array_key_exists('unreadCounters', $data)) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['unreadCounters'] as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $object->setUnreadCounters($values_1);
                unset($data['unreadCounters']);
            }
            foreach ($data as $key_2 => $value_2) {
                if (preg_match('/.*/', (string) $key_2)) {
                    $object[$key_2] = $value_2;
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
            if ($object->isInitialized('readCounters') && null !== $object->getReadCounters()) {
                $values = [];
                foreach ($object->getReadCounters() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['readCounters'] = $values;
            }
            if ($object->isInitialized('unreadCounters') && null !== $object->getUnreadCounters()) {
                $values_1 = [];
                foreach ($object->getUnreadCounters() as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $data['unreadCounters'] = $values_1;
            }
            foreach ($object as $key_2 => $value_2) {
                if (preg_match('/.*/', (string) $key_2)) {
                    $data[$key_2] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Korvium\Plugin\Miniflux\Model\FeedCounters::class => false];
        }
    }
}
