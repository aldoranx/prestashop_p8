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
    const ROOT_PACKAGE_NAME = 'prestashop/prestashop';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'beberlei/doctrineextensions' => 'v1.3.0@008f162f191584a6c37c03a803f718802ba9dd9a',
  'composer/ca-bundle' => '1.2.9@78a0e288fdcebf92aa2318a8d3656168da6ac1a5',
  'composer/installers' => 'v1.10.0@1a0357fccad9d1cc1ea0c9a05b8847fbccccb78d',
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'csa/guzzle-bundle' => 'dev-compat-php@7282d89834960347c830efd43dcd788f09a9959a',
  'cssjanus/cssjanus' => 'dev-patch-1@7866b8a6f7ad8ba8c7f4eb9f87b084452a41d8e5',
  'curl/curl' => '1.9.3@43436a604b18c2a985cbc3f983be817fbe500e99',
  'defuse/php-encryption' => '2.0.3@2c6fea3d9a4eaaa8cef86b2a89f3660818117b33',
  'doctrine/annotations' => '1.11.1@ce77a7ba1770462cd705a91a151b6c3746f9c6ad',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '2.13.3@f3812c026e557892c34ef37f6ab808a6b567da7f',
  'doctrine/dbal' => '2.12.1@adce7a954a1c2f14f85e94aed90c8489af204086',
  'doctrine/doctrine-bundle' => '1.12.13@85460b85edd8f61a16ad311e7ffc5d255d3c937c',
  'doctrine/doctrine-cache-bundle' => '1.4.0@6bee2f9b339847e8a984427353670bad4e7bdccb',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/orm' => '2.7.5@01187c9260cd085529ddd1273665217cae659640',
  'doctrine/persistence' => '1.3.8@7a6eac9fb6f61bba91328f15aa7547f4806ca288',
  'doctrine/reflection' => '1.2.2@fa587178be682efe90d005e3a322590d6ebb59a5',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'ezyang/htmlpurifier' => 'v4.13.0@08e27c97e4c6ed02f37c5b2b20488046c8d90d75',
  'fig/link-util' => '1.1.1@c038ee75ca13663ddc2d1f185fe6f7533c00832a',
  'friendsofsymfony/jsrouting-bundle' => '2.7.0@d56600542504148bf2faa2b6bd7571a6adf6799e',
  'geoip2/geoip2' => 'v2.4.5@b28a0ed0190cd76c878ed7002a5d1bb8c5f4c175',
  'greenlion/php-sql-parser' => '4.3.0@e0262c0848d95c7f777d1a5aa6b0a42e7763e223',
  'guzzlehttp/cache-subscriber' => '0.2.0@8c766ba399e4c46383e3eaa220201be62abd101e',
  'guzzlehttp/guzzle' => '5.3.4@b87eda7a7162f95574032da17e9323c9899cb6b2',
  'guzzlehttp/log-subscriber' => '1.0.1@99c3c0004165db721d8ef7bbef60c996210e538a',
  'guzzlehttp/ringphp' => '1.1.1@5e2a174052995663dd68e6b5ad838afd47dd615b',
  'guzzlehttp/streams' => '3.0.0@47aaa48e27dae43d39fc1cea0ccf0d84ac1a2ba5',
  'incenteev/composer-parameter-handler' => 'v2.1.4@084befb11ec21faeadcddefb88b66132775ff59b',
  'ircmaxell/password-compat' => 'v1.0.4@5c5cde8822a69545767f7c7f3058cb15ff84614c',
  'ircmaxell/random-lib' => 'v1.2.0@e9e0204f40e49fa4419946c677eccd3fa25b8cf4',
  'ircmaxell/security-lib' => 'v1.1.0@f3db6de12c20c9bcd1aa3db4353a1bbe0e44e1b5',
  'jakeasmith/http_build_url' => '1.0.1@93c273e77cb1edead0cf8bcf8cd2003428e74e37',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'league/tactician' => 'v1.0.3@d0339e22fd9252fb0fa53102b488d2c514483b8a',
  'league/tactician-bundle' => 'v1.2.0@66b97472915290b93654e60610295660f597ad4e',
  'league/tactician-container' => '2.0.0@d1a5d884e072b8cafbff802d07766076eb2ffcb0',
  'league/tactician-logger' => 'v0.10.0@3ff9ee04e4cbec100af827f829ed4c7ff7c08442',
  'maennchen/zipstream-php' => '2.1.0@c4c5803cc1f93df3d2448478ef79394a5981cc58',
  'markbaker/complex' => '2.0.0@9999f1432fae467bc93c53f357105b4c31bb994c',
  'markbaker/matrix' => '2.1.1@35a2d1a919a1de732402f694925168c53c17c838',
  'martinlindhe/php-mb-helpers' => '0.1.6@3550df9e6976f753d2879543e4aaf96eaa9657a2',
  'matthiasmullie/minify' => '1.3.66@45fd3b0f1dfa2c965857c6d4a470bea52adc31a6',
  'matthiasmullie/path-converter' => '1.1.3@e7d13b2c7e2f2268e1424aaed02085518afa02d9',
  'maxmind-db/reader' => 'v1.9.0@9ee9ba9ee287b119e9f5a8e8dbfea0b49647cec4',
  'maxmind/web-service-common' => 'v0.8.1@32f274051c543fc865e5a84d3a2c703913641ea8',
  'mobiledetect/mobiledetectlib' => '2.8.34@6f8113f57a508494ca36acbcfa2dc2d923c7ed5b',
  'monolog/monolog' => '1.26.0@2209ddd84e7ef1256b7af205d0717fb62cfc9c33',
  'mrclay/minify' => '2.3.3@1928e89208d28e91427b2f13b67acdbd8cd01ac9',
  'myclabs/php-enum' => '1.7.7@d178027d1e679832db9f38248fcc7200647dc2b7',
  'nikic/php-parser' => 'v4.10.4@c6d052fc58cb876152f89f532b95a8d7907e7f0e',
  'paragonie/random_compat' => 'v2.0.19@446fc9faa5c2a9ddf65eb7121c0af7e857295241',
  'pear/archive_tar' => '1.4.12@19bb8e95490d3e3ad92fcac95500ca80bdcc7495',
  'pear/console_getopt' => 'v1.4.3@a41f8d3e668987609178c7c4a9fe48fecac53fa0',
  'pear/pear-core-minimal' => 'v1.10.10@625a3c429d9b2c1546438679074cac1b089116a7',
  'pear/pear_exception' => 'v1.0.1@dbb42a5a0e45f3adcf99babfb2a1ba77b8ac36a7',
  'pelago/emogrifier' => 'v2.2.0@2472bc1c3a2dee8915ecc2256139c6100024332f',
  'phpoffice/phpspreadsheet' => '1.16.0@76d4323b85129d0c368149c831a07a3e258b2b50',
  'prestashop/blockreassurance' => 'v5.0.0@ba730eb184e6e68b870b9f91f4a1f2a56518127a',
  'prestashop/circuit-breaker' => 'v3.0.0@8764540d470b533c9484534343688733bc363f77',
  'prestashop/contactform' => 'v4.3.0@849aae54ec564aca94877b9bee50e71bb0468edb',
  'prestashop/dashactivity' => 'v2.0.2@8d41fab7a58cdaeabc0248f6fd571da32d7615d4',
  'prestashop/dashgoals' => 'v2.0.2@2a8d41bcc9f2b09924b5e82407bcd6d61ea61ab6',
  'prestashop/dashproducts' => 'v2.1.1@22652ff141bfc3d5563918210f9b58305c80f4d7',
  'prestashop/dashtrends' => 'v2.0.3@da68ea81c2d0d13d9fd851934c75927fe222d5e3',
  'prestashop/decimal' => '1.4.0@188028580f4b551c126d1d723578f3ee88008e95',
  'prestashop/graphnvd3' => 'v2.0.1@c4b8fa0d82d047b63be02e74e84a27f46a746065',
  'prestashop/gridhtml' => 'v2.0.1@bbd3985d5919a0c4dec622eb716cf157769eaab9',
  'prestashop/gsitemap' => 'v4.2.0@b67dda02a8b6488eb4e2a67080357ac3f9e57057',
  'prestashop/pagesnotfound' => 'v2.0.0@8707d8184f0c6678a95c64b957aec6053ed069ef',
  'prestashop/productcomments' => '4.2.1@bf361efa8b291c5134a2cceeeb1ab84db31b05b7',
  'prestashop/ps_banner' => 'v2.1.0@9616f7fc9cda997ef1860562d3212fd021205805',
  'prestashop/ps_categorytree' => 'v2.0.1@37b36138c083c8c724b5a6dd6c32f25aabbb08a5',
  'prestashop/ps_checkpayment' => 'v2.0.5@6239ecbe75c427f81536ed2df8b56421ab2fa9b2',
  'prestashop/ps_contactinfo' => 'v3.3.0@1c74f18a12118cbb7622e79044c48aaa55ce93c3',
  'prestashop/ps_crossselling' => 'v2.0.1@0912b4eddef88ca2b3f23bccdee168ebd6bf507f',
  'prestashop/ps_currencyselector' => 'v2.0.1@6e2b87c4fbddf757af0233ab419e8a4a76d4daf0',
  'prestashop/ps_customeraccountlinks' => 'v3.1.1@d11934ba345af11e51ed7ebc82d1cb4593d21379',
  'prestashop/ps_customersignin' => 'v2.0.3@a9006ddf5a3a376e60bf300eecf1608286f739ca',
  'prestashop/ps_customtext' => 'v4.1.1@8d46ad28d99ec03dbba31d121cce1365593425c6',
  'prestashop/ps_dataprivacy' => 'v2.0.0@7635ac3a3d373c26af81d28ead8efbf76ba53796',
  'prestashop/ps_emailsubscription' => 'v2.6.0@d4ef6d74fe3dd3f2f3a0cd7c7c6b92bf0f9277f6',
  'prestashop/ps_facetedsearch' => 'v3.7.0@a889cce83d7df567e1f6d1b1ebf16915a102a5ba',
  'prestashop/ps_faviconnotificationbo' => 'v2.1.0@161cdd57a520d8a0acd3dac96b427acc178dd9d7',
  'prestashop/ps_featuredproducts' => 'v2.1.0@a175279ce8fce9669fa1b22c5a13be86c4c1c334',
  'prestashop/ps_imageslider' => 'v3.1.0@52e9d1a068e3b2879ce2184f00c083c8190c7ce7',
  'prestashop/ps_languageselector' => 'v2.1.0@22d69b4dbc1a12ab2692d91962d8993d6e64557f',
  'prestashop/ps_linklist' => 'v3.2.0@4abf07d4ee2b007df78849fc9475c2dcab087a69',
  'prestashop/ps_mainmenu' => 'v2.2.0@23323e6165423a58b2b79edd7a13a4de338d922f',
  'prestashop/ps_searchbar' => 'v2.1.0@61bff70e5ed4e3f0df61419446fe5fc7a5cac8bf',
  'prestashop/ps_sharebuttons' => 'v2.1.0@2a0302774b84820be38e76a34188d777de12403f',
  'prestashop/ps_shoppingcart' => 'v2.0.4@b168cfcaf15724a17d7bbc862b2347730f79daa4',
  'prestashop/ps_socialfollow' => 'v2.1.0@2a1bb73cbcdcf929b876b624f033d87c8b101133',
  'prestashop/ps_themecusto' => 'v1.2.0@69482091a23a68caa19aedc89f04f01fa997db77',
  'prestashop/ps_wirepayment' => 'v2.1.0@99e8fbb3c66bad0217cf6f19a987d4f175aa2740',
  'prestashop/sekeywords' => 'v2.0.0@f174c055da105af3054690a4f6c48208849b5241',
  'prestashop/statsbestcategories' => 'v2.0.0@57791a21f63d43cf145fa1ef1f84031a47f5e7c2',
  'prestashop/statsbestcustomers' => 'v2.0.2@b0250e88e9144ca373d8006c922d3e84ea4987b9',
  'prestashop/statsbestmanufacturers' => 'v2.0.0@b9897beda6084d08f489d4d00995a085b8e76739',
  'prestashop/statsbestproducts' => 'v2.0.0@0ed33cdcc6cc6657ad97b944620e085a36261bc8',
  'prestashop/statsbestsuppliers' => 'v2.0.0@7e46e732b8a77dc989f5891ff9d3616d1c5fd46f',
  'prestashop/statsbestvouchers' => 'v2.0.0@c8ee93efa6d83cca3410285d8a7f4df904db21f0',
  'prestashop/statscarrier' => 'v2.0.0@3ccfe3914dd19f1fa31166e001c55eefe574877d',
  'prestashop/statscatalog' => 'v2.0.1@be6be71c703900dda0182e56c9c6658ab85f215b',
  'prestashop/statscheckup' => 'v2.0.1@7acd7702ab8ecb2b88e529e1eab8d4b7fafbca07',
  'prestashop/statsdata' => 'v2.1.0@4de78d4c0b096f2d6768f5c96856ea8eabd8358c',
  'prestashop/statsequipment' => 'v2.0.0@4b0c3f75d55bdd18b2903f8263ce3b48b6cf30ec',
  'prestashop/statsforecast' => 'v2.0.3@8ecbeaef0e32657cf79000f95861e41e19e22d49',
  'prestashop/statslive' => 'v2.1.0@9a15002cbae3f68ffcdde015c50662a4dc4abcde',
  'prestashop/statsnewsletter' => 'v2.0.2@7fd9a55c4b39eb034f73ef4723a1a83c6d73560e',
  'prestashop/statsorigin' => 'v2.0.2@24ca4f143a2f0b5d3d7bc817547df79f837faeb3',
  'prestashop/statspersonalinfos' => 'v2.0.3@d00510d282fc442535f8110f30f44d502c4addaa',
  'prestashop/statsproduct' => 'v2.0.3@caf05aefabd63ac84e06bc2a0bdcf69f965d03c4',
  'prestashop/statsregistrations' => 'v2.0.0@51d79fb12770919f1b1f9d9d9f931148d60149c2',
  'prestashop/statssales' => 'v2.0.0@6e28ce4ea2eb1a4a8b6b76bfb6b56e1b02ef651a',
  'prestashop/statssearch' => 'v2.0.1@8b77131a1fdbebc4d5d6768a31de17b4d2a26b97',
  'prestashop/statsstock' => 'v2.0.0@1b60aae430151943d6e4b0068a3e30ab2cc5843e',
  'prestashop/statsvisits' => 'v2.0.3@95aa7494f4329dcf8e0dd0386eb6513eb2976f44',
  'prestashop/translationtools-bundle' => 'v4.0.4@9da37780f6004271616579365238d9421a2d1b97',
  'prestashop/welcome' => 'v6.0.4@2634da35dec6c52a8c3a18dfcf051dbbb6b48edc',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'react/promise' => 'v2.8.0@f3cff96a19736714524ca0dd1d4130de73dbbbc4',
  'sensio/distribution-bundle' => 'v5.0.25@80a38234bde8321fb92aa0b8c27978a272bb4baf',
  'sensio/framework-extra-bundle' => 'v5.4.1@585f4b3a1c54f24d1a8431c729fc8f5acca20c8a',
  'sensiolabs/security-checker' => 'v6.0.3@a576c01520d9761901f269c4934ba55448be4a54',
  'shudrum/array-finder' => 'v1.1.0@42380f01017371b7a1e8e02b0bf12cb534e454d7',
  'smarty/smarty' => 'v3.1.38@63b3c0aed0f614880cda21a5c08c606e97b489bb',
  'soundasleep/html2text' => '0.5.0@cdb89f6ffa2c4cc78f8ed9ea6ee0594a9133ccad',
  'swiftmailer/swiftmailer' => 'v6.2.5@698a6a9f54d7eb321274de3ad19863802c879fb7',
  'symfony/deprecation-contracts' => 'v2.2.0@5fa56b4074d1ae755beb55617ddafe6f5d78f665',
  'symfony/http-client' => 'v5.2.1@a77cbec69ea90dea509beef29b79748c0df33a83',
  'symfony/http-client-contracts' => 'v2.3.1@41db680a15018f9c1d4b23516059633ce280ca33',
  'symfony/mime' => 'v5.2.1@de97005aef7426ba008c46ba840fc301df577ada',
  'symfony/monolog-bundle' => 'v3.6.0@e495f5c7e4e672ffef4357d4a4d85f010802f940',
  'symfony/polyfill-apcu' => 'v1.22.0@3b3944f40987b9d3f9b9147f86c32df87d9f3505',
  'symfony/polyfill-ctype' => 'v1.22.0@c6c942b1ac76c82448322025e084cadc56048b4e',
  'symfony/polyfill-iconv' => 'v1.22.0@b34bfb8c4c22650ac080d2662ae3502e5f2f4ae6',
  'symfony/polyfill-intl-icu' => 'v1.22.0@b2b1e732a6c039f1a3ea3414b3379a2433e183d6',
  'symfony/polyfill-intl-idn' => 'v1.22.0@0eb8293dbbcd6ef6bf81404c9ce7d95bcdf34f44',
  'symfony/polyfill-intl-normalizer' => 'v1.22.0@6e971c891537eb617a00bb07a43d182a6915faba',
  'symfony/polyfill-mbstring' => 'v1.22.0@f377a3dd1fde44d37b9831d68dc8dea3ffd28e13',
  'symfony/polyfill-php56' => 'v1.20.0@54b8cd7e6c1643d78d011f3be89f3ef1f9f4c675',
  'symfony/polyfill-php70' => 'v1.20.0@5f03a781d984aae42cebd18e7912fa80f02ee644',
  'symfony/polyfill-php72' => 'v1.22.0@cc6e6f9b39fe8075b3dabfbaf5b5f645ae1340c9',
  'symfony/polyfill-php73' => 'v1.22.0@a678b42e92f86eca04b7fa4c0f6f19d097fb69e2',
  'symfony/polyfill-php80' => 'v1.22.0@dc3063ba22c2a1fd2f45ed856374d79114998f91',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/swiftmailer-bundle' => 'v3.2.6@7a83160b50a2479d37eb74ba71577380b9afe4f5',
  'symfony/symfony' => 'v3.4.47@83093d5448a7b90fd4cbcce38580ae53898f506f',
  'tecnickcom/tcpdf' => '6.3.5@19a535eaa7fb1c1cac499109deeb1a7a201b4549',
  'tijsverkoyen/css-to-inline-styles' => '2.2.3@b43b05cf43c1b6d849478965062b6ef73e223bb5',
  'twig/twig' => 'v1.44.2@138c493c5b8ee7cff3821f80b8896d371366b5fe',
  'willdurand/jsonp-callback-validator' => 'v1.1.0@1a7d388bb521959e612ef50c5c7b1691b097e909',
  'behat/behat' => 'v3.7.0@08052f739619a9e9f62f457a67302f0715e6dd13',
  'behat/gherkin' => 'v4.6.2@51ac4500c4dc30cbaaabcd2f25694299df666a31',
  'behat/transliterator' => 'v1.3.0@3c4ec1d77c3d05caa1f0bf8fb3aae4845005c7fc',
  'composer/semver' => '3.2.4@a02fdf930a3c1c3ed3a49b5f63859c0c20e10464',
  'composer/xdebug-handler' => '1.4.5@f28d44c286812c714741478d968104c5e604a1d4',
  'friendsofphp/php-cs-fixer' => 'v2.18.1@c68ff6231adb276857761e43b7ed082f164dce0b',
  'johnkary/phpunit-speedtrap' => 'v3.3.0@9ba81d42676da31366c85d3ff8c10a8352d02030',
  'mikey179/vfsstream' => 'v1.6.8@231c73783ebb7dd9ec77916c10037eff5a2b6efe',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'phake/phake' => 'v3.1.8@9f9dfb12c9ce6e38c73de9631ea2ab0f0ea36a65',
  'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
  'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6',
  'php-cs-fixer/diff' => 'v1.3.1@dbd31aeb251639ac0b9e7e29405c1441907f5759',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'phpspec/prophecy' => '1.12.2@245710e971a030f42e08f4912863805570f23d39',
  'phpstan/phpstan' => '0.12.68@ddbe01af0706ee094c3f1ce9730b35aebb508d3d',
  'phpunit/php-code-coverage' => '6.1.4@807e6013b00af69b6c5d9ceb4282d0393dbb9d8d',
  'phpunit/php-file-iterator' => '2.0.3@4b49fb70f067272b659ef0174ff9ca40fdaa6357',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.3@2454ae1765516d20c4ffe103d85a58a9a3bd5662',
  'phpunit/php-token-stream' => '3.1.2@472b687829041c24b25f475e14c2f38a09edf1c2',
  'phpunit/phpunit' => '7.5.20@9467db479d1b0487c99733bb1e7944d32deded2c',
  'sebastian/code-unit-reverse-lookup' => '1.0.2@1de8cd5c010cb153fcd68b8d0f64606f523f7619',
  'sebastian/comparator' => '3.0.3@1071dfcef776a57013124ff35e1fc41ccd294758',
  'sebastian/diff' => '3.0.3@14f72dd46eaf2f2293cbe79c93cc0bc43161a211',
  'sebastian/environment' => '4.2.4@d47bbbad83711771f167c72d4e3f25f7fcc1f8b0',
  'sebastian/exporter' => '3.1.3@6b853149eab67d4da22291d36f5b0631c0fd856e',
  'sebastian/global-state' => '2.0.0@e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4',
  'sebastian/object-enumerator' => '3.0.4@e67f6d32ebd0c749cf9d1dbd9f226c727043cdf2',
  'sebastian/object-reflector' => '1.1.2@9b8772b9cbd456ab45d4a598d2dd1a1bced6363d',
  'sebastian/recursion-context' => '3.0.1@367dcba38d6e1977be014dc4b22f47a484dac7fb',
  'sebastian/resource-operations' => '2.0.2@31d35ca87926450c44eae7e2611d45a7a65ea8b3',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'symfony/phpunit-bridge' => 'v3.4.47@120273ad5d03a8deee08ca9260e2598f288f2bac',
  'theseer/tokenizer' => '1.2.0@75a63c33a8577608444246075ea0af0d052e452a',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'prestashop/prestashop' => 'dev-develop@5c1012790bab5cbe1b75914da631613d17afe6e1',
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
