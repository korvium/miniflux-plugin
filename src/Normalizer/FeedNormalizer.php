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
    class FeedNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \Korvium\Plugin\Miniflux\Model\Feed::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \Korvium\Plugin\Miniflux\Model\Feed::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Korvium\Plugin\Miniflux\Model\Feed();
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
            if (\array_key_exists('feedUrl', $data)) {
                $object->setFeedUrl($data['feedUrl']);
                unset($data['feedUrl']);
            }
            if (\array_key_exists('siteUrl', $data)) {
                $object->setSiteUrl($data['siteUrl']);
                unset($data['siteUrl']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            if (\array_key_exists('checkedAt', $data)) {
                $object->setCheckedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['checkedAt']));
                unset($data['checkedAt']);
            }
            if (\array_key_exists('etagHeader', $data)) {
                $object->setEtagHeader($data['etagHeader']);
                unset($data['etagHeader']);
            }
            if (\array_key_exists('lastModifiedHeader', $data)) {
                $object->setLastModifiedHeader($data['lastModifiedHeader']);
                unset($data['lastModifiedHeader']);
            }
            if (\array_key_exists('parsingErrorMessage', $data)) {
                $object->setParsingErrorMessage($data['parsingErrorMessage']);
                unset($data['parsingErrorMessage']);
            }
            if (\array_key_exists('parsingErrorCount', $data)) {
                $object->setParsingErrorCount($data['parsingErrorCount']);
                unset($data['parsingErrorCount']);
            }
            if (\array_key_exists('disabled', $data)) {
                $object->setDisabled($data['disabled']);
                unset($data['disabled']);
            }
            if (\array_key_exists('ignoreHttpCache', $data)) {
                $object->setIgnoreHttpCache($data['ignoreHttpCache']);
                unset($data['ignoreHttpCache']);
            }
            if (\array_key_exists('allowSelfSignedCertificates', $data)) {
                $object->setAllowSelfSignedCertificates($data['allowSelfSignedCertificates']);
                unset($data['allowSelfSignedCertificates']);
            }
            if (\array_key_exists('fetchViaProxy', $data)) {
                $object->setFetchViaProxy($data['fetchViaProxy']);
                unset($data['fetchViaProxy']);
            }
            if (\array_key_exists('scraperRules', $data)) {
                $object->setScraperRules($data['scraperRules']);
                unset($data['scraperRules']);
            }
            if (\array_key_exists('rewriteRules', $data)) {
                $object->setRewriteRules($data['rewriteRules']);
                unset($data['rewriteRules']);
            }
            if (\array_key_exists('blocklistRules', $data)) {
                $object->setBlocklistRules($data['blocklistRules']);
                unset($data['blocklistRules']);
            }
            if (\array_key_exists('keeplistRules', $data)) {
                $object->setKeeplistRules($data['keeplistRules']);
                unset($data['keeplistRules']);
            }
            if (\array_key_exists('crawler', $data)) {
                $object->setCrawler($data['crawler']);
                unset($data['crawler']);
            }
            if (\array_key_exists('userAgent', $data)) {
                $object->setUserAgent($data['userAgent']);
                unset($data['userAgent']);
            }
            if (\array_key_exists('cookie', $data)) {
                $object->setCookie($data['cookie']);
                unset($data['cookie']);
            }
            if (\array_key_exists('category', $data)) {
                $object->setCategory($this->denormalizer->denormalize($data['category'], \Korvium\Plugin\Miniflux\Model\Category::class, 'json', $context));
                unset($data['category']);
            }
            if (\array_key_exists('hideGlobally', $data)) {
                $object->setHideGlobally($data['hideGlobally']);
                unset($data['hideGlobally']);
            }
            if (\array_key_exists('disableHttp2', $data)) {
                $object->setDisableHttp2($data['disableHttp2']);
                unset($data['disableHttp2']);
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
            if ($object->isInitialized('feedUrl') && null !== $object->getFeedUrl()) {
                $data['feedUrl'] = $object->getFeedUrl();
            }
            if ($object->isInitialized('siteUrl') && null !== $object->getSiteUrl()) {
                $data['siteUrl'] = $object->getSiteUrl();
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            if ($object->isInitialized('checkedAt') && null !== $object->getCheckedAt()) {
                $data['checkedAt'] = $object->getCheckedAt()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('etagHeader') && null !== $object->getEtagHeader()) {
                $data['etagHeader'] = $object->getEtagHeader();
            }
            if ($object->isInitialized('lastModifiedHeader') && null !== $object->getLastModifiedHeader()) {
                $data['lastModifiedHeader'] = $object->getLastModifiedHeader();
            }
            if ($object->isInitialized('parsingErrorMessage') && null !== $object->getParsingErrorMessage()) {
                $data['parsingErrorMessage'] = $object->getParsingErrorMessage();
            }
            if ($object->isInitialized('parsingErrorCount') && null !== $object->getParsingErrorCount()) {
                $data['parsingErrorCount'] = $object->getParsingErrorCount();
            }
            if ($object->isInitialized('disabled') && null !== $object->getDisabled()) {
                $data['disabled'] = $object->getDisabled();
            }
            if ($object->isInitialized('ignoreHttpCache') && null !== $object->getIgnoreHttpCache()) {
                $data['ignoreHttpCache'] = $object->getIgnoreHttpCache();
            }
            if ($object->isInitialized('allowSelfSignedCertificates') && null !== $object->getAllowSelfSignedCertificates()) {
                $data['allowSelfSignedCertificates'] = $object->getAllowSelfSignedCertificates();
            }
            if ($object->isInitialized('fetchViaProxy') && null !== $object->getFetchViaProxy()) {
                $data['fetchViaProxy'] = $object->getFetchViaProxy();
            }
            if ($object->isInitialized('scraperRules') && null !== $object->getScraperRules()) {
                $data['scraperRules'] = $object->getScraperRules();
            }
            if ($object->isInitialized('rewriteRules') && null !== $object->getRewriteRules()) {
                $data['rewriteRules'] = $object->getRewriteRules();
            }
            if ($object->isInitialized('blocklistRules') && null !== $object->getBlocklistRules()) {
                $data['blocklistRules'] = $object->getBlocklistRules();
            }
            if ($object->isInitialized('keeplistRules') && null !== $object->getKeeplistRules()) {
                $data['keeplistRules'] = $object->getKeeplistRules();
            }
            if ($object->isInitialized('crawler') && null !== $object->getCrawler()) {
                $data['crawler'] = $object->getCrawler();
            }
            if ($object->isInitialized('userAgent') && null !== $object->getUserAgent()) {
                $data['userAgent'] = $object->getUserAgent();
            }
            if ($object->isInitialized('cookie') && null !== $object->getCookie()) {
                $data['cookie'] = $object->getCookie();
            }
            if ($object->isInitialized('category') && null !== $object->getCategory()) {
                $data['category'] = $this->normalizer->normalize($object->getCategory(), 'json', $context);
            }
            if ($object->isInitialized('hideGlobally') && null !== $object->getHideGlobally()) {
                $data['hideGlobally'] = $object->getHideGlobally();
            }
            if ($object->isInitialized('disableHttp2') && null !== $object->getDisableHttp2()) {
                $data['disableHttp2'] = $object->getDisableHttp2();
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
            return [\Korvium\Plugin\Miniflux\Model\Feed::class => false];
        }
    }
} else {
    class FeedNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \Korvium\Plugin\Miniflux\Model\Feed::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \Korvium\Plugin\Miniflux\Model\Feed::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Korvium\Plugin\Miniflux\Model\Feed();
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
            if (\array_key_exists('feedUrl', $data)) {
                $object->setFeedUrl($data['feedUrl']);
                unset($data['feedUrl']);
            }
            if (\array_key_exists('siteUrl', $data)) {
                $object->setSiteUrl($data['siteUrl']);
                unset($data['siteUrl']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            if (\array_key_exists('checkedAt', $data)) {
                $object->setCheckedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['checkedAt']));
                unset($data['checkedAt']);
            }
            if (\array_key_exists('etagHeader', $data)) {
                $object->setEtagHeader($data['etagHeader']);
                unset($data['etagHeader']);
            }
            if (\array_key_exists('lastModifiedHeader', $data)) {
                $object->setLastModifiedHeader($data['lastModifiedHeader']);
                unset($data['lastModifiedHeader']);
            }
            if (\array_key_exists('parsingErrorMessage', $data)) {
                $object->setParsingErrorMessage($data['parsingErrorMessage']);
                unset($data['parsingErrorMessage']);
            }
            if (\array_key_exists('parsingErrorCount', $data)) {
                $object->setParsingErrorCount($data['parsingErrorCount']);
                unset($data['parsingErrorCount']);
            }
            if (\array_key_exists('disabled', $data)) {
                $object->setDisabled($data['disabled']);
                unset($data['disabled']);
            }
            if (\array_key_exists('ignoreHttpCache', $data)) {
                $object->setIgnoreHttpCache($data['ignoreHttpCache']);
                unset($data['ignoreHttpCache']);
            }
            if (\array_key_exists('allowSelfSignedCertificates', $data)) {
                $object->setAllowSelfSignedCertificates($data['allowSelfSignedCertificates']);
                unset($data['allowSelfSignedCertificates']);
            }
            if (\array_key_exists('fetchViaProxy', $data)) {
                $object->setFetchViaProxy($data['fetchViaProxy']);
                unset($data['fetchViaProxy']);
            }
            if (\array_key_exists('scraperRules', $data)) {
                $object->setScraperRules($data['scraperRules']);
                unset($data['scraperRules']);
            }
            if (\array_key_exists('rewriteRules', $data)) {
                $object->setRewriteRules($data['rewriteRules']);
                unset($data['rewriteRules']);
            }
            if (\array_key_exists('blocklistRules', $data)) {
                $object->setBlocklistRules($data['blocklistRules']);
                unset($data['blocklistRules']);
            }
            if (\array_key_exists('keeplistRules', $data)) {
                $object->setKeeplistRules($data['keeplistRules']);
                unset($data['keeplistRules']);
            }
            if (\array_key_exists('crawler', $data)) {
                $object->setCrawler($data['crawler']);
                unset($data['crawler']);
            }
            if (\array_key_exists('userAgent', $data)) {
                $object->setUserAgent($data['userAgent']);
                unset($data['userAgent']);
            }
            if (\array_key_exists('cookie', $data)) {
                $object->setCookie($data['cookie']);
                unset($data['cookie']);
            }
            if (\array_key_exists('category', $data)) {
                $object->setCategory($this->denormalizer->denormalize($data['category'], \Korvium\Plugin\Miniflux\Model\Category::class, 'json', $context));
                unset($data['category']);
            }
            if (\array_key_exists('hideGlobally', $data)) {
                $object->setHideGlobally($data['hideGlobally']);
                unset($data['hideGlobally']);
            }
            if (\array_key_exists('disableHttp2', $data)) {
                $object->setDisableHttp2($data['disableHttp2']);
                unset($data['disableHttp2']);
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
            if ($object->isInitialized('feedUrl') && null !== $object->getFeedUrl()) {
                $data['feedUrl'] = $object->getFeedUrl();
            }
            if ($object->isInitialized('siteUrl') && null !== $object->getSiteUrl()) {
                $data['siteUrl'] = $object->getSiteUrl();
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            if ($object->isInitialized('checkedAt') && null !== $object->getCheckedAt()) {
                $data['checkedAt'] = $object->getCheckedAt()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('etagHeader') && null !== $object->getEtagHeader()) {
                $data['etagHeader'] = $object->getEtagHeader();
            }
            if ($object->isInitialized('lastModifiedHeader') && null !== $object->getLastModifiedHeader()) {
                $data['lastModifiedHeader'] = $object->getLastModifiedHeader();
            }
            if ($object->isInitialized('parsingErrorMessage') && null !== $object->getParsingErrorMessage()) {
                $data['parsingErrorMessage'] = $object->getParsingErrorMessage();
            }
            if ($object->isInitialized('parsingErrorCount') && null !== $object->getParsingErrorCount()) {
                $data['parsingErrorCount'] = $object->getParsingErrorCount();
            }
            if ($object->isInitialized('disabled') && null !== $object->getDisabled()) {
                $data['disabled'] = $object->getDisabled();
            }
            if ($object->isInitialized('ignoreHttpCache') && null !== $object->getIgnoreHttpCache()) {
                $data['ignoreHttpCache'] = $object->getIgnoreHttpCache();
            }
            if ($object->isInitialized('allowSelfSignedCertificates') && null !== $object->getAllowSelfSignedCertificates()) {
                $data['allowSelfSignedCertificates'] = $object->getAllowSelfSignedCertificates();
            }
            if ($object->isInitialized('fetchViaProxy') && null !== $object->getFetchViaProxy()) {
                $data['fetchViaProxy'] = $object->getFetchViaProxy();
            }
            if ($object->isInitialized('scraperRules') && null !== $object->getScraperRules()) {
                $data['scraperRules'] = $object->getScraperRules();
            }
            if ($object->isInitialized('rewriteRules') && null !== $object->getRewriteRules()) {
                $data['rewriteRules'] = $object->getRewriteRules();
            }
            if ($object->isInitialized('blocklistRules') && null !== $object->getBlocklistRules()) {
                $data['blocklistRules'] = $object->getBlocklistRules();
            }
            if ($object->isInitialized('keeplistRules') && null !== $object->getKeeplistRules()) {
                $data['keeplistRules'] = $object->getKeeplistRules();
            }
            if ($object->isInitialized('crawler') && null !== $object->getCrawler()) {
                $data['crawler'] = $object->getCrawler();
            }
            if ($object->isInitialized('userAgent') && null !== $object->getUserAgent()) {
                $data['userAgent'] = $object->getUserAgent();
            }
            if ($object->isInitialized('cookie') && null !== $object->getCookie()) {
                $data['cookie'] = $object->getCookie();
            }
            if ($object->isInitialized('category') && null !== $object->getCategory()) {
                $data['category'] = $this->normalizer->normalize($object->getCategory(), 'json', $context);
            }
            if ($object->isInitialized('hideGlobally') && null !== $object->getHideGlobally()) {
                $data['hideGlobally'] = $object->getHideGlobally();
            }
            if ($object->isInitialized('disableHttp2') && null !== $object->getDisableHttp2()) {
                $data['disableHttp2'] = $object->getDisableHttp2();
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
            return [\Korvium\Plugin\Miniflux\Model\Feed::class => false];
        }
    }
}
