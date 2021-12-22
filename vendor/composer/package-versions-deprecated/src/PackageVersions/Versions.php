<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'doctrine/annotations' => '1.13.2@5b668aef16090008790395c02c893b1ba13f7e08',
  'doctrine/cache' => '2.1.1@331b4d5dbaeab3827976273e9356b3b453c300ce',
  'doctrine/collections' => '1.6.8@1958a744696c6bb3bb0d28db2611dc11610e78af',
  'doctrine/common' => '3.2.0@6d970a11479275300b5144e9373ce5feacfa9b91',
  'doctrine/dbal' => '3.2.0@5d54f63541d7bed1156cb5c9b79274ced61890e4',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '2.5.0@4a75cead0bb01cadc57c81cfa7c905e3151ed119',
  'doctrine/doctrine-migrations-bundle' => '3.2.1@c1b10bc1466e08bba82640e49c7bbcce0c9853c2',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.4@8b7ff3e4b7de6b2c84da85637b59fd2880ecaa89',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.3.2@b6e43bb5815f4dbb88c79a0fef1c669dfba52d58',
  'doctrine/orm' => '2.10.2@81d472f6f96b8b571cafefe8d2fef89ed9446a62',
  'doctrine/persistence' => '2.2.3@5e7bdbbfe9811c06e1f745d1c166647d5c47d6ee',
  'doctrine/sql-formatter' => '1.1.2@20c39c2de286a9d3262cc8ed282a4ae60e265894',
  'egulias/email-validator' => '3.1.2@ee0db30118f661fb166bcffbf5d82032df484697',
  'ezyang/htmlpurifier' => 'v4.13.0@08e27c97e4c6ed02f37c5b2b20488046c8d90d75',
  'friendsofphp/proxy-manager-lts' => 'v1.0.5@006aa5d32f887a4db4353b13b5b5095613e0611f',
  'laminas/laminas-code' => '4.4.3@bb324850d09dd437b6acb142c13e64fdc725b0e1',
  'maennchen/zipstream-php' => '2.1.0@c4c5803cc1f93df3d2448478ef79394a5981cc58',
  'markbaker/complex' => '3.0.1@ab8bc271e404909db09ff2d5ffa1e538085c0f22',
  'markbaker/matrix' => '3.0.0@c66aefcafb4f6c269510e9ac46b82619a904c576',
  'monolog/monolog' => '2.3.5@fd4380d6fc37626e2f799f29d91195040137eba9',
  'myclabs/php-enum' => '1.8.3@b942d263c641ddb5190929ff840c68f78713e937',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.3.0@622548b623e81ca6d78b721c5e029f4ce664f170',
  'phpdocumentor/type-resolver' => '1.5.1@a12f7e301eb7258bb68acd89d4aefa05c2906cae',
  'phpoffice/phpspreadsheet' => '1.20.0@44436f270bb134b4a94670f3d020a85dfa0a3c02',
  'psr/cache' => '2.0.0@213f9dbc5b9bfbc4f8db86d2838dc968752ce13b',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/link' => '1.1.1@846c25f58a1f02b93a00f2404e3626b6bf9b7807',
  'psr/log' => '2.0.0@ef29f6d262798707a9edd554e2b82517ef3a9376',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'sensio/framework-extra-bundle' => 'v5.6.1@430d14c01836b77c28092883d195a43ce413ee32',
  'symfony/asset' => 'v5.2.12@abe64fee9fa2978c730c84d0d6df760f2d9ddba0',
  'symfony/cache' => 'v5.2.12@b59303192fb99c8b3d3abc0b5975c7512fe6d1f4',
  'symfony/cache-contracts' => 'v2.5.0@ac2e168102a2e06a2624f0379bde94cd5854ced2',
  'symfony/config' => 'v5.2.12@32f6be0d0c2e204ff35759f9ee81d4f5e83b7acb',
  'symfony/console' => 'v5.2.14@ffc2722adb0983451855c794c4bc7818d3c65fa2',
  'symfony/dependency-injection' => 'v5.2.12@2f0326ab0e142a3600b1b435cb3e852bc96264b6',
  'symfony/deprecation-contracts' => 'v2.5.0@6f981ee24cf69ee7ce9736146d1c57c2780598a8',
  'symfony/doctrine-bridge' => 'v5.2.12@0212d2d1e17a3e7403475b76e26fc1f0f1add04b',
  'symfony/dotenv' => 'v5.2.14@12888c9c46ac750ec5c1381db5bf3d534e7d70cb',
  'symfony/error-handler' => 'v5.2.12@7ca5fa510345f6b8def43b18c900852defaee362',
  'symfony/event-dispatcher' => 'v5.2.12@6a32cd803f8ff33d84b709de3978f44a62e42961',
  'symfony/event-dispatcher-contracts' => 'v2.5.0@66bea3b09be61613cd3b4043a65a8ec48cfa6d2a',
  'symfony/expression-language' => 'v5.2.12@d4367d36217dd395b10f61649a6bf2c1367140d8',
  'symfony/filesystem' => 'v5.2.12@ed397ef25365b3db9f215af4ed5b1ec8a5b10989',
  'symfony/finder' => 'v5.2.12@17f50e06018baec41551a71a15731287dbaab186',
  'symfony/flex' => 'v1.17.5@3f0dc66dcddff035a2ab98ed7e666dfd478b2712',
  'symfony/form' => 'v5.2.12@929811a7667aa5814f93a70974423870b14c05aa',
  'symfony/framework-bundle' => 'v5.2.12@4e9ca1c60dba3b5e261eadd3b427bc115914b72b',
  'symfony/http-client' => 'v5.2.12@1895ede860a198803395a67738104211508b5ddc',
  'symfony/http-client-contracts' => 'v2.5.0@ec82e57b5b714dbb69300d348bd840b345e24166',
  'symfony/http-foundation' => 'v5.2.14@2a247de56fc8f5efdf1e098192128e8e509d370c',
  'symfony/http-kernel' => 'v5.2.14@2c3b9af1047c477c527504a3509ab59e4fae0689',
  'symfony/intl' => 'v5.2.12@23ae12a613eb77725c6ef6a15d37b0e9956c6a2a',
  'symfony/mailer' => 'v5.2.12@75ea7f9e54c1bc49b6d7e3d6b20422f85b7ea3e4',
  'symfony/mime' => 'v5.2.12@6ad63acd694b30e75fb2426b037e92859df73d6b',
  'symfony/monolog-bridge' => 'v5.2.12@2c3943d7c0100983f9c0a82807555273353e3539',
  'symfony/monolog-bundle' => 'v3.7.1@fde12fc628162787a4e53877abadc30047fd868b',
  'symfony/notifier' => 'v5.2.12@08f557f018e080ea36d51b43a6552bf5396e9c83',
  'symfony/options-resolver' => 'v5.2.12@1935d2e5329aba28cbb9ef6cc5687d007619d96d',
  'symfony/polyfill-intl-grapheme' => 'v1.23.1@16880ba9c5ebe3642d1995ab866db29270b36535',
  'symfony/polyfill-intl-icu' => 'v1.23.0@4a80a521d6176870b6445cfb469c130f9cae1dda',
  'symfony/polyfill-intl-idn' => 'v1.23.0@65bd267525e82759e7d8c4e8ceea44f398838e65',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.1@9174a3d80210dca8daa7f31fec659150bbeabfc6',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.1@1100343ed1a92e3a38f9ae122fc0eb21602547be',
  'symfony/polyfill-php81' => 'v1.23.0@e66119f3de95efc359483f810c4c3e6436279436',
  'symfony/process' => 'v5.2.12@d16634ee55b895bd85ec714dadc58e4428ecf030',
  'symfony/property-access' => 'v5.2.12@82c6db3e4066ebc1993c377ae71090d0c8f0552c',
  'symfony/property-info' => 'v5.2.12@f9dd1886f47db8ea494d97a4b8bfa494094f53f1',
  'symfony/proxy-manager-bridge' => 'v5.2.12@76e61f33f6a34a340bf6e02211214f466e8e1dba',
  'symfony/routing' => 'v5.2.12@983a19067308962592755f57d97ca1d1f1edd37b',
  'symfony/security-bundle' => 'v5.2.12@bc36546f36355d7c0b56b23c44786b36904f838d',
  'symfony/security-core' => 'v5.2.14@4ce2b1e532fb3bb591ad4efa8cc43afc9242a247',
  'symfony/security-csrf' => 'v5.2.12@f0af6689451582e55f6b3439362e72e536e916e4',
  'symfony/security-guard' => 'v5.2.12@9edddb0b4c97eb923ba9910050be80f539933c3b',
  'symfony/security-http' => 'v5.2.12@8d6fb4fb1bb0d4a11b30de85cbf77914c71175bc',
  'symfony/serializer' => 'v5.2.12@3c3afcc285c01c486d1c5504e7895026580495c4',
  'symfony/service-contracts' => 'v2.5.0@1ab11b933cd6bc5464b08e81e2c5b07dec58b0fc',
  'symfony/stopwatch' => 'v5.2.12@24744393b122b8309bbcc7965972ae51a29a602d',
  'symfony/string' => 'v5.2.11@ab6dc1c796bbceffbaf9ccbfb7a24feb641d6ee7',
  'symfony/translation' => 'v5.2.12@7b4ef368b25bbb758a7bd5fe20349433e84220ed',
  'symfony/translation-contracts' => 'v2.5.0@d28150f0f44ce854e942b671fc2620a98aae1b1e',
  'symfony/twig-bridge' => 'v5.2.12@243a7c6416fea3b91391f09831d8d04b2e42c0b1',
  'symfony/twig-bundle' => 'v5.2.12@6f2aa369c4b7da19b3c864c48e35b26451c92e4e',
  'symfony/validator' => 'v5.2.14@a46ac85624ad3418d455bb8f4ce452014c28518c',
  'symfony/var-dumper' => 'v5.2.12@d5f42c357a6672d4e5960bba85e437850e9a7abb',
  'symfony/var-exporter' => 'v5.2.12@b7898a65fc91e7c41de7a88c7db9aee9c0d432f0',
  'symfony/web-link' => 'v5.2.12@3d1f4a0318314c63c363f5d49de15d54780b2079',
  'symfony/yaml' => 'v5.2.14@ffe9c92e1a6c77c3ad5fc3a2ac16f0b8549dae10',
  'twig/extra-bundle' => 'v3.3.4@1fe52d84aa22b7891c7717ef904b1551c8d70100',
  'twig/twig' => 'v3.3.4@65cb6f0b956485e1664f13d023c55298a4bb59ca',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'nikic/php-parser' => 'v4.13.1@63a79e8daa781cac14e5195e63ed8ae231dd10fd',
  'symfony/browser-kit' => 'v5.2.12@ed7ebe262cef150742f5b61d48a94d37513c5758',
  'symfony/css-selector' => 'v5.2.12@7fb120adc7f600a59027775b224c13a33530dd90',
  'symfony/debug-bundle' => 'v5.2.12@2cb76e25ca75afb0d52c1ba83d77cd4190ed5552',
  'symfony/dom-crawler' => 'v5.2.12@c983279c00f723eef8da2a4b1522296c82dc75da',
  'symfony/maker-bundle' => 'v1.36.3@0f40c826c0725208c254ddcd3481690e6c7e5047',
  'symfony/phpunit-bridge' => 'v5.3.11@7b3637f0ce55c510a0fbe6e4d49b223103b7bf7b',
  'symfony/web-profiler-bundle' => 'v5.2.13@380038080e46eb92b3a392de646fd32b632f1c77',
  'symfony/polyfill-ctype' => '*@c6bcc54f57bb4af8368d244a1935bb79c855193f',
  'symfony/polyfill-iconv' => '*@c6bcc54f57bb4af8368d244a1935bb79c855193f',
  'symfony/polyfill-php72' => '*@c6bcc54f57bb4af8368d244a1935bb79c855193f',
  '__root__' => 'dev-master@c6bcc54f57bb4af8368d244a1935bb79c855193f',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
