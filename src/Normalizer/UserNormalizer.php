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
    class UserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \Korvium\Plugin\Miniflux\Model\User::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \Korvium\Plugin\Miniflux\Model\User::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Korvium\Plugin\Miniflux\Model\User();
            if (\array_key_exists('mediaPlaybackRate', $data) && \is_int($data['mediaPlaybackRate'])) {
                $data['mediaPlaybackRate'] = (float) $data['mediaPlaybackRate'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('username', $data)) {
                $object->setUsername($data['username']);
                unset($data['username']);
            }
            if (\array_key_exists('password', $data)) {
                $object->setPassword($data['password']);
                unset($data['password']);
            }
            if (\array_key_exists('isAdmin', $data)) {
                $object->setIsAdmin($data['isAdmin']);
                unset($data['isAdmin']);
            }
            if (\array_key_exists('theme', $data)) {
                $object->setTheme($data['theme']);
                unset($data['theme']);
            }
            if (\array_key_exists('language', $data)) {
                $object->setLanguage($data['language']);
                unset($data['language']);
            }
            if (\array_key_exists('timezone', $data)) {
                $object->setTimezone($data['timezone']);
                unset($data['timezone']);
            }
            if (\array_key_exists('entryDirection', $data)) {
                $object->setEntryDirection($data['entryDirection']);
                unset($data['entryDirection']);
            }
            if (\array_key_exists('entryOrder', $data)) {
                $object->setEntryOrder($data['entryOrder']);
                unset($data['entryOrder']);
            }
            if (\array_key_exists('stylesheet', $data)) {
                $object->setStylesheet($data['stylesheet']);
                unset($data['stylesheet']);
            }
            if (\array_key_exists('customJS', $data)) {
                $object->setCustomJS($data['customJS']);
                unset($data['customJS']);
            }
            if (\array_key_exists('googleID', $data)) {
                $object->setGoogleID($data['googleID']);
                unset($data['googleID']);
            }
            if (\array_key_exists('openIDConnectID', $data)) {
                $object->setOpenIDConnectID($data['openIDConnectID']);
                unset($data['openIDConnectID']);
            }
            if (\array_key_exists('entriesPerPage', $data)) {
                $object->setEntriesPerPage($data['entriesPerPage']);
                unset($data['entriesPerPage']);
            }
            if (\array_key_exists('keyboardShortcuts', $data)) {
                $object->setKeyboardShortcuts($data['keyboardShortcuts']);
                unset($data['keyboardShortcuts']);
            }
            if (\array_key_exists('showReadingTime', $data)) {
                $object->setShowReadingTime($data['showReadingTime']);
                unset($data['showReadingTime']);
            }
            if (\array_key_exists('entrySwipe', $data)) {
                $object->setEntrySwipe($data['entrySwipe']);
                unset($data['entrySwipe']);
            }
            if (\array_key_exists('gestureNav', $data)) {
                $object->setGestureNav($data['gestureNav']);
                unset($data['gestureNav']);
            }
            if (\array_key_exists('lastLoginAt', $data)) {
                $object->setLastLoginAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['lastLoginAt']));
                unset($data['lastLoginAt']);
            }
            if (\array_key_exists('displayMode', $data)) {
                $object->setDisplayMode($data['displayMode']);
                unset($data['displayMode']);
            }
            if (\array_key_exists('defaultReadingSpeed', $data)) {
                $object->setDefaultReadingSpeed($data['defaultReadingSpeed']);
                unset($data['defaultReadingSpeed']);
            }
            if (\array_key_exists('cjkReadingSpeed', $data)) {
                $object->setCjkReadingSpeed($data['cjkReadingSpeed']);
                unset($data['cjkReadingSpeed']);
            }
            if (\array_key_exists('defaultHomePage', $data)) {
                $object->setDefaultHomePage($data['defaultHomePage']);
                unset($data['defaultHomePage']);
            }
            if (\array_key_exists('categoriesSortingOrder', $data)) {
                $object->setCategoriesSortingOrder($data['categoriesSortingOrder']);
                unset($data['categoriesSortingOrder']);
            }
            if (\array_key_exists('markReadOnView', $data)) {
                $object->setMarkReadOnView($data['markReadOnView']);
                unset($data['markReadOnView']);
            }
            if (\array_key_exists('mediaPlaybackRate', $data)) {
                $object->setMediaPlaybackRate($data['mediaPlaybackRate']);
                unset($data['mediaPlaybackRate']);
            }
            if (\array_key_exists('blockFilterEntryRules', $data)) {
                $object->setBlockFilterEntryRules($data['blockFilterEntryRules']);
                unset($data['blockFilterEntryRules']);
            }
            if (\array_key_exists('keepFilterEntryRules', $data)) {
                $object->setKeepFilterEntryRules($data['keepFilterEntryRules']);
                unset($data['keepFilterEntryRules']);
            }
            if (\array_key_exists('externalFontHosts', $data)) {
                $object->setExternalFontHosts($data['externalFontHosts']);
                unset($data['externalFontHosts']);
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
            if ($object->isInitialized('username') && null !== $object->getUsername()) {
                $data['username'] = $object->getUsername();
            }
            if ($object->isInitialized('password') && null !== $object->getPassword()) {
                $data['password'] = $object->getPassword();
            }
            if ($object->isInitialized('isAdmin') && null !== $object->getIsAdmin()) {
                $data['isAdmin'] = $object->getIsAdmin();
            }
            if ($object->isInitialized('theme') && null !== $object->getTheme()) {
                $data['theme'] = $object->getTheme();
            }
            if ($object->isInitialized('language') && null !== $object->getLanguage()) {
                $data['language'] = $object->getLanguage();
            }
            if ($object->isInitialized('timezone') && null !== $object->getTimezone()) {
                $data['timezone'] = $object->getTimezone();
            }
            if ($object->isInitialized('entryDirection') && null !== $object->getEntryDirection()) {
                $data['entryDirection'] = $object->getEntryDirection();
            }
            if ($object->isInitialized('entryOrder') && null !== $object->getEntryOrder()) {
                $data['entryOrder'] = $object->getEntryOrder();
            }
            if ($object->isInitialized('stylesheet') && null !== $object->getStylesheet()) {
                $data['stylesheet'] = $object->getStylesheet();
            }
            if ($object->isInitialized('customJS') && null !== $object->getCustomJS()) {
                $data['customJS'] = $object->getCustomJS();
            }
            if ($object->isInitialized('googleID') && null !== $object->getGoogleID()) {
                $data['googleID'] = $object->getGoogleID();
            }
            if ($object->isInitialized('openIDConnectID') && null !== $object->getOpenIDConnectID()) {
                $data['openIDConnectID'] = $object->getOpenIDConnectID();
            }
            if ($object->isInitialized('entriesPerPage') && null !== $object->getEntriesPerPage()) {
                $data['entriesPerPage'] = $object->getEntriesPerPage();
            }
            if ($object->isInitialized('keyboardShortcuts') && null !== $object->getKeyboardShortcuts()) {
                $data['keyboardShortcuts'] = $object->getKeyboardShortcuts();
            }
            if ($object->isInitialized('showReadingTime') && null !== $object->getShowReadingTime()) {
                $data['showReadingTime'] = $object->getShowReadingTime();
            }
            if ($object->isInitialized('entrySwipe') && null !== $object->getEntrySwipe()) {
                $data['entrySwipe'] = $object->getEntrySwipe();
            }
            if ($object->isInitialized('gestureNav') && null !== $object->getGestureNav()) {
                $data['gestureNav'] = $object->getGestureNav();
            }
            if ($object->isInitialized('lastLoginAt') && null !== $object->getLastLoginAt()) {
                $data['lastLoginAt'] = $object->getLastLoginAt()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('displayMode') && null !== $object->getDisplayMode()) {
                $data['displayMode'] = $object->getDisplayMode();
            }
            if ($object->isInitialized('defaultReadingSpeed') && null !== $object->getDefaultReadingSpeed()) {
                $data['defaultReadingSpeed'] = $object->getDefaultReadingSpeed();
            }
            if ($object->isInitialized('cjkReadingSpeed') && null !== $object->getCjkReadingSpeed()) {
                $data['cjkReadingSpeed'] = $object->getCjkReadingSpeed();
            }
            if ($object->isInitialized('defaultHomePage') && null !== $object->getDefaultHomePage()) {
                $data['defaultHomePage'] = $object->getDefaultHomePage();
            }
            if ($object->isInitialized('categoriesSortingOrder') && null !== $object->getCategoriesSortingOrder()) {
                $data['categoriesSortingOrder'] = $object->getCategoriesSortingOrder();
            }
            if ($object->isInitialized('markReadOnView') && null !== $object->getMarkReadOnView()) {
                $data['markReadOnView'] = $object->getMarkReadOnView();
            }
            if ($object->isInitialized('mediaPlaybackRate') && null !== $object->getMediaPlaybackRate()) {
                $data['mediaPlaybackRate'] = $object->getMediaPlaybackRate();
            }
            if ($object->isInitialized('blockFilterEntryRules') && null !== $object->getBlockFilterEntryRules()) {
                $data['blockFilterEntryRules'] = $object->getBlockFilterEntryRules();
            }
            if ($object->isInitialized('keepFilterEntryRules') && null !== $object->getKeepFilterEntryRules()) {
                $data['keepFilterEntryRules'] = $object->getKeepFilterEntryRules();
            }
            if ($object->isInitialized('externalFontHosts') && null !== $object->getExternalFontHosts()) {
                $data['externalFontHosts'] = $object->getExternalFontHosts();
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
            return [\Korvium\Plugin\Miniflux\Model\User::class => false];
        }
    }
} else {
    class UserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \Korvium\Plugin\Miniflux\Model\User::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \Korvium\Plugin\Miniflux\Model\User::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Korvium\Plugin\Miniflux\Model\User();
            if (\array_key_exists('mediaPlaybackRate', $data) && \is_int($data['mediaPlaybackRate'])) {
                $data['mediaPlaybackRate'] = (float) $data['mediaPlaybackRate'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('username', $data)) {
                $object->setUsername($data['username']);
                unset($data['username']);
            }
            if (\array_key_exists('password', $data)) {
                $object->setPassword($data['password']);
                unset($data['password']);
            }
            if (\array_key_exists('isAdmin', $data)) {
                $object->setIsAdmin($data['isAdmin']);
                unset($data['isAdmin']);
            }
            if (\array_key_exists('theme', $data)) {
                $object->setTheme($data['theme']);
                unset($data['theme']);
            }
            if (\array_key_exists('language', $data)) {
                $object->setLanguage($data['language']);
                unset($data['language']);
            }
            if (\array_key_exists('timezone', $data)) {
                $object->setTimezone($data['timezone']);
                unset($data['timezone']);
            }
            if (\array_key_exists('entryDirection', $data)) {
                $object->setEntryDirection($data['entryDirection']);
                unset($data['entryDirection']);
            }
            if (\array_key_exists('entryOrder', $data)) {
                $object->setEntryOrder($data['entryOrder']);
                unset($data['entryOrder']);
            }
            if (\array_key_exists('stylesheet', $data)) {
                $object->setStylesheet($data['stylesheet']);
                unset($data['stylesheet']);
            }
            if (\array_key_exists('customJS', $data)) {
                $object->setCustomJS($data['customJS']);
                unset($data['customJS']);
            }
            if (\array_key_exists('googleID', $data)) {
                $object->setGoogleID($data['googleID']);
                unset($data['googleID']);
            }
            if (\array_key_exists('openIDConnectID', $data)) {
                $object->setOpenIDConnectID($data['openIDConnectID']);
                unset($data['openIDConnectID']);
            }
            if (\array_key_exists('entriesPerPage', $data)) {
                $object->setEntriesPerPage($data['entriesPerPage']);
                unset($data['entriesPerPage']);
            }
            if (\array_key_exists('keyboardShortcuts', $data)) {
                $object->setKeyboardShortcuts($data['keyboardShortcuts']);
                unset($data['keyboardShortcuts']);
            }
            if (\array_key_exists('showReadingTime', $data)) {
                $object->setShowReadingTime($data['showReadingTime']);
                unset($data['showReadingTime']);
            }
            if (\array_key_exists('entrySwipe', $data)) {
                $object->setEntrySwipe($data['entrySwipe']);
                unset($data['entrySwipe']);
            }
            if (\array_key_exists('gestureNav', $data)) {
                $object->setGestureNav($data['gestureNav']);
                unset($data['gestureNav']);
            }
            if (\array_key_exists('lastLoginAt', $data)) {
                $object->setLastLoginAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['lastLoginAt']));
                unset($data['lastLoginAt']);
            }
            if (\array_key_exists('displayMode', $data)) {
                $object->setDisplayMode($data['displayMode']);
                unset($data['displayMode']);
            }
            if (\array_key_exists('defaultReadingSpeed', $data)) {
                $object->setDefaultReadingSpeed($data['defaultReadingSpeed']);
                unset($data['defaultReadingSpeed']);
            }
            if (\array_key_exists('cjkReadingSpeed', $data)) {
                $object->setCjkReadingSpeed($data['cjkReadingSpeed']);
                unset($data['cjkReadingSpeed']);
            }
            if (\array_key_exists('defaultHomePage', $data)) {
                $object->setDefaultHomePage($data['defaultHomePage']);
                unset($data['defaultHomePage']);
            }
            if (\array_key_exists('categoriesSortingOrder', $data)) {
                $object->setCategoriesSortingOrder($data['categoriesSortingOrder']);
                unset($data['categoriesSortingOrder']);
            }
            if (\array_key_exists('markReadOnView', $data)) {
                $object->setMarkReadOnView($data['markReadOnView']);
                unset($data['markReadOnView']);
            }
            if (\array_key_exists('mediaPlaybackRate', $data)) {
                $object->setMediaPlaybackRate($data['mediaPlaybackRate']);
                unset($data['mediaPlaybackRate']);
            }
            if (\array_key_exists('blockFilterEntryRules', $data)) {
                $object->setBlockFilterEntryRules($data['blockFilterEntryRules']);
                unset($data['blockFilterEntryRules']);
            }
            if (\array_key_exists('keepFilterEntryRules', $data)) {
                $object->setKeepFilterEntryRules($data['keepFilterEntryRules']);
                unset($data['keepFilterEntryRules']);
            }
            if (\array_key_exists('externalFontHosts', $data)) {
                $object->setExternalFontHosts($data['externalFontHosts']);
                unset($data['externalFontHosts']);
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
            if ($object->isInitialized('username') && null !== $object->getUsername()) {
                $data['username'] = $object->getUsername();
            }
            if ($object->isInitialized('password') && null !== $object->getPassword()) {
                $data['password'] = $object->getPassword();
            }
            if ($object->isInitialized('isAdmin') && null !== $object->getIsAdmin()) {
                $data['isAdmin'] = $object->getIsAdmin();
            }
            if ($object->isInitialized('theme') && null !== $object->getTheme()) {
                $data['theme'] = $object->getTheme();
            }
            if ($object->isInitialized('language') && null !== $object->getLanguage()) {
                $data['language'] = $object->getLanguage();
            }
            if ($object->isInitialized('timezone') && null !== $object->getTimezone()) {
                $data['timezone'] = $object->getTimezone();
            }
            if ($object->isInitialized('entryDirection') && null !== $object->getEntryDirection()) {
                $data['entryDirection'] = $object->getEntryDirection();
            }
            if ($object->isInitialized('entryOrder') && null !== $object->getEntryOrder()) {
                $data['entryOrder'] = $object->getEntryOrder();
            }
            if ($object->isInitialized('stylesheet') && null !== $object->getStylesheet()) {
                $data['stylesheet'] = $object->getStylesheet();
            }
            if ($object->isInitialized('customJS') && null !== $object->getCustomJS()) {
                $data['customJS'] = $object->getCustomJS();
            }
            if ($object->isInitialized('googleID') && null !== $object->getGoogleID()) {
                $data['googleID'] = $object->getGoogleID();
            }
            if ($object->isInitialized('openIDConnectID') && null !== $object->getOpenIDConnectID()) {
                $data['openIDConnectID'] = $object->getOpenIDConnectID();
            }
            if ($object->isInitialized('entriesPerPage') && null !== $object->getEntriesPerPage()) {
                $data['entriesPerPage'] = $object->getEntriesPerPage();
            }
            if ($object->isInitialized('keyboardShortcuts') && null !== $object->getKeyboardShortcuts()) {
                $data['keyboardShortcuts'] = $object->getKeyboardShortcuts();
            }
            if ($object->isInitialized('showReadingTime') && null !== $object->getShowReadingTime()) {
                $data['showReadingTime'] = $object->getShowReadingTime();
            }
            if ($object->isInitialized('entrySwipe') && null !== $object->getEntrySwipe()) {
                $data['entrySwipe'] = $object->getEntrySwipe();
            }
            if ($object->isInitialized('gestureNav') && null !== $object->getGestureNav()) {
                $data['gestureNav'] = $object->getGestureNav();
            }
            if ($object->isInitialized('lastLoginAt') && null !== $object->getLastLoginAt()) {
                $data['lastLoginAt'] = $object->getLastLoginAt()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('displayMode') && null !== $object->getDisplayMode()) {
                $data['displayMode'] = $object->getDisplayMode();
            }
            if ($object->isInitialized('defaultReadingSpeed') && null !== $object->getDefaultReadingSpeed()) {
                $data['defaultReadingSpeed'] = $object->getDefaultReadingSpeed();
            }
            if ($object->isInitialized('cjkReadingSpeed') && null !== $object->getCjkReadingSpeed()) {
                $data['cjkReadingSpeed'] = $object->getCjkReadingSpeed();
            }
            if ($object->isInitialized('defaultHomePage') && null !== $object->getDefaultHomePage()) {
                $data['defaultHomePage'] = $object->getDefaultHomePage();
            }
            if ($object->isInitialized('categoriesSortingOrder') && null !== $object->getCategoriesSortingOrder()) {
                $data['categoriesSortingOrder'] = $object->getCategoriesSortingOrder();
            }
            if ($object->isInitialized('markReadOnView') && null !== $object->getMarkReadOnView()) {
                $data['markReadOnView'] = $object->getMarkReadOnView();
            }
            if ($object->isInitialized('mediaPlaybackRate') && null !== $object->getMediaPlaybackRate()) {
                $data['mediaPlaybackRate'] = $object->getMediaPlaybackRate();
            }
            if ($object->isInitialized('blockFilterEntryRules') && null !== $object->getBlockFilterEntryRules()) {
                $data['blockFilterEntryRules'] = $object->getBlockFilterEntryRules();
            }
            if ($object->isInitialized('keepFilterEntryRules') && null !== $object->getKeepFilterEntryRules()) {
                $data['keepFilterEntryRules'] = $object->getKeepFilterEntryRules();
            }
            if ($object->isInitialized('externalFontHosts') && null !== $object->getExternalFontHosts()) {
                $data['externalFontHosts'] = $object->getExternalFontHosts();
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
            return [\Korvium\Plugin\Miniflux\Model\User::class => false];
        }
    }
}
