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
    class EnclosureNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \Korvium\Plugin\Miniflux\Model\Enclosure::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \Korvium\Plugin\Miniflux\Model\Enclosure::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Korvium\Plugin\Miniflux\Model\Enclosure();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('userId', $data)) {
                $object->setUserId($data['userId']);
                unset($data['userId']);
            }
            if (\array_key_exists('entryId', $data)) {
                $object->setEntryId($data['entryId']);
                unset($data['entryId']);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('mimeType', $data)) {
                $object->setMimeType($data['mimeType']);
                unset($data['mimeType']);
            }
            if (\array_key_exists('size', $data)) {
                $object->setSize($data['size']);
                unset($data['size']);
            }
            if (\array_key_exists('mediaProgression', $data)) {
                $object->setMediaProgression($data['mediaProgression']);
                unset($data['mediaProgression']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            if ($object->isInitialized('userId') && null !== $object->getUserId()) {
                $data['userId'] = $object->getUserId();
            }
            if ($object->isInitialized('entryId') && null !== $object->getEntryId()) {
                $data['entryId'] = $object->getEntryId();
            }
            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
            }
            if ($object->isInitialized('mimeType') && null !== $object->getMimeType()) {
                $data['mimeType'] = $object->getMimeType();
            }
            if ($object->isInitialized('size') && null !== $object->getSize()) {
                $data['size'] = $object->getSize();
            }
            if ($object->isInitialized('mediaProgression') && null !== $object->getMediaProgression()) {
                $data['mediaProgression'] = $object->getMediaProgression();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Korvium\Plugin\Miniflux\Model\Enclosure::class => false];
        }
    }
} else {
    class EnclosureNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \Korvium\Plugin\Miniflux\Model\Enclosure::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \Korvium\Plugin\Miniflux\Model\Enclosure::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Korvium\Plugin\Miniflux\Model\Enclosure();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('userId', $data)) {
                $object->setUserId($data['userId']);
                unset($data['userId']);
            }
            if (\array_key_exists('entryId', $data)) {
                $object->setEntryId($data['entryId']);
                unset($data['entryId']);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('mimeType', $data)) {
                $object->setMimeType($data['mimeType']);
                unset($data['mimeType']);
            }
            if (\array_key_exists('size', $data)) {
                $object->setSize($data['size']);
                unset($data['size']);
            }
            if (\array_key_exists('mediaProgression', $data)) {
                $object->setMediaProgression($data['mediaProgression']);
                unset($data['mediaProgression']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            if ($object->isInitialized('userId') && null !== $object->getUserId()) {
                $data['userId'] = $object->getUserId();
            }
            if ($object->isInitialized('entryId') && null !== $object->getEntryId()) {
                $data['entryId'] = $object->getEntryId();
            }
            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
            }
            if ($object->isInitialized('mimeType') && null !== $object->getMimeType()) {
                $data['mimeType'] = $object->getMimeType();
            }
            if ($object->isInitialized('size') && null !== $object->getSize()) {
                $data['size'] = $object->getSize();
            }
            if ($object->isInitialized('mediaProgression') && null !== $object->getMediaProgression()) {
                $data['mediaProgression'] = $object->getMediaProgression();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Korvium\Plugin\Miniflux\Model\Enclosure::class => false];
        }
    }
}