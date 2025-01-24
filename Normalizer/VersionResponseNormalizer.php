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
    class VersionResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \Korvium\Plugin\Miniflux\Model\VersionResponse::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \Korvium\Plugin\Miniflux\Model\VersionResponse::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Korvium\Plugin\Miniflux\Model\VersionResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('version', $data)) {
                $object->setVersion($data['version']);
                unset($data['version']);
            }
            if (\array_key_exists('commit', $data)) {
                $object->setCommit($data['commit']);
                unset($data['commit']);
            }
            if (\array_key_exists('buildDate', $data)) {
                $object->setBuildDate($data['buildDate']);
                unset($data['buildDate']);
            }
            if (\array_key_exists('goVersion', $data)) {
                $object->setGoVersion($data['goVersion']);
                unset($data['goVersion']);
            }
            if (\array_key_exists('compiler', $data)) {
                $object->setCompiler($data['compiler']);
                unset($data['compiler']);
            }
            if (\array_key_exists('arch', $data)) {
                $object->setArch($data['arch']);
                unset($data['arch']);
            }
            if (\array_key_exists('os', $data)) {
                $object->setOs($data['os']);
                unset($data['os']);
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
            if ($object->isInitialized('version') && null !== $object->getVersion()) {
                $data['version'] = $object->getVersion();
            }
            if ($object->isInitialized('commit') && null !== $object->getCommit()) {
                $data['commit'] = $object->getCommit();
            }
            if ($object->isInitialized('buildDate') && null !== $object->getBuildDate()) {
                $data['buildDate'] = $object->getBuildDate();
            }
            if ($object->isInitialized('goVersion') && null !== $object->getGoVersion()) {
                $data['goVersion'] = $object->getGoVersion();
            }
            if ($object->isInitialized('compiler') && null !== $object->getCompiler()) {
                $data['compiler'] = $object->getCompiler();
            }
            if ($object->isInitialized('arch') && null !== $object->getArch()) {
                $data['arch'] = $object->getArch();
            }
            if ($object->isInitialized('os') && null !== $object->getOs()) {
                $data['os'] = $object->getOs();
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
            return [\Korvium\Plugin\Miniflux\Model\VersionResponse::class => false];
        }
    }
} else {
    class VersionResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \Korvium\Plugin\Miniflux\Model\VersionResponse::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \Korvium\Plugin\Miniflux\Model\VersionResponse::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Korvium\Plugin\Miniflux\Model\VersionResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('version', $data)) {
                $object->setVersion($data['version']);
                unset($data['version']);
            }
            if (\array_key_exists('commit', $data)) {
                $object->setCommit($data['commit']);
                unset($data['commit']);
            }
            if (\array_key_exists('buildDate', $data)) {
                $object->setBuildDate($data['buildDate']);
                unset($data['buildDate']);
            }
            if (\array_key_exists('goVersion', $data)) {
                $object->setGoVersion($data['goVersion']);
                unset($data['goVersion']);
            }
            if (\array_key_exists('compiler', $data)) {
                $object->setCompiler($data['compiler']);
                unset($data['compiler']);
            }
            if (\array_key_exists('arch', $data)) {
                $object->setArch($data['arch']);
                unset($data['arch']);
            }
            if (\array_key_exists('os', $data)) {
                $object->setOs($data['os']);
                unset($data['os']);
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
            if ($object->isInitialized('version') && null !== $object->getVersion()) {
                $data['version'] = $object->getVersion();
            }
            if ($object->isInitialized('commit') && null !== $object->getCommit()) {
                $data['commit'] = $object->getCommit();
            }
            if ($object->isInitialized('buildDate') && null !== $object->getBuildDate()) {
                $data['buildDate'] = $object->getBuildDate();
            }
            if ($object->isInitialized('goVersion') && null !== $object->getGoVersion()) {
                $data['goVersion'] = $object->getGoVersion();
            }
            if ($object->isInitialized('compiler') && null !== $object->getCompiler()) {
                $data['compiler'] = $object->getCompiler();
            }
            if ($object->isInitialized('arch') && null !== $object->getArch()) {
                $data['arch'] = $object->getArch();
            }
            if ($object->isInitialized('os') && null !== $object->getOs()) {
                $data['os'] = $object->getOs();
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
            return [\Korvium\Plugin\Miniflux\Model\VersionResponse::class => false];
        }
    }
}
