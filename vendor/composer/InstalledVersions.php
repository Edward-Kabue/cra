<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;






class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => 'dev-main',
    'version' => 'dev-main',
    'aliases' => 
    array (
    ),
    'reference' => '3d6d8c0e49dc044c0ee0ed62e7c442ce9a02a42a',
    'name' => '__root__',
  ),
  'versions' => 
  array (
    '__root__' => 
    array (
      'pretty_version' => 'dev-main',
      'version' => 'dev-main',
      'aliases' => 
      array (
      ),
      'reference' => '3d6d8c0e49dc044c0ee0ed62e7c442ce9a02a42a',
    ),
    'bower-asset/inputmask' => 
    array (
      'provided' => 
      array (
        0 => '~3.2.2|~3.3.5',
      ),
    ),
    'bower-asset/jquery' => 
    array (
      'provided' => 
      array (
        0 => '3.5.*@stable|3.4.*@stable|3.3.*@stable|3.2.*@stable|3.1.*@stable|2.2.*@stable|2.1.*@stable|1.11.*@stable|1.12.*@stable',
      ),
    ),
    'bower-asset/punycode' => 
    array (
      'provided' => 
      array (
        0 => '1.3.*',
      ),
    ),
    'bower-asset/yii2-pjax' => 
    array (
      'provided' => 
      array (
        0 => '~2.0.1',
      ),
    ),
    'cebe/markdown' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '9bac5e971dd391e2802dca5400bbeacbaea9eb86',
    ),
    'commerceguys/addressing' => 
    array (
      'pretty_version' => 'v1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '566febd56ca71e31dd383b014c4e1bec680507bf',
    ),
    'composer/ca-bundle' => 
    array (
      'pretty_version' => '1.3.3',
      'version' => '1.3.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '30897edbfb15e784fe55587b4f73ceefd3c4d98c',
    ),
    'composer/composer' => 
    array (
      'pretty_version' => '2.2.15',
      'version' => '2.2.15.0',
      'aliases' => 
      array (
      ),
      'reference' => '509dcbd4f8d459e0ef2ef223a231b8c31bceed78',
    ),
    'composer/metadata-minifier' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c549d23829536f0d0e984aaabbf02af91f443207',
    ),
    'composer/pcre' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '67a32d7d6f9f560b726ab25a061b38ff3a80c560',
    ),
    'composer/semver' => 
    array (
      'pretty_version' => '3.3.2',
      'version' => '3.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '3953f23262f2bff1919fc82183ad9acb13ff62c9',
    ),
    'composer/spdx-licenses' => 
    array (
      'pretty_version' => '1.5.7',
      'version' => '1.5.7.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c848241796da2abf65837d51dce1fae55a960149',
    ),
    'composer/xdebug-handler' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ced299686f41dce890debac69273b47ffe98a40c',
    ),
    'craftcms/cms' => 
    array (
      'pretty_version' => '4.2.0.2',
      'version' => '4.2.0.2',
      'aliases' => 
      array (
      ),
      'reference' => 'cf3f39924bddd1a69295b5af03dae2c1b03815ea',
    ),
    'craftcms/element-api' => 
    array (
      'pretty_version' => '3.0.1.1',
      'version' => '3.0.1.1',
      'aliases' => 
      array (
      ),
      'reference' => '1e885be5b1b08e7ab8eed04d34fd2523c688e99e',
    ),
    'craftcms/html-field' => 
    array (
      'pretty_version' => '2.0.5',
      'version' => '2.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a969a86e9b6d156b40f558ec57a1ff4543389ae8',
    ),
    'craftcms/oauth2-craftid' => 
    array (
      'pretty_version' => '1.0.0.1',
      'version' => '1.0.0.1',
      'aliases' => 
      array (
      ),
      'reference' => '3f18364139d72d83fb50546d85130beaaa868836',
    ),
    'craftcms/plugin-installer' => 
    array (
      'pretty_version' => '1.5.7',
      'version' => '1.5.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '23ec472acd4410b70b07d5a02b2b82db9ee3f66b',
    ),
    'craftcms/redactor' => 
    array (
      'pretty_version' => '3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c9c152be7a75813ba193f30cb3effed3f005d03e',
    ),
    'craftcms/server-check' => 
    array (
      'pretty_version' => '2.1.4',
      'version' => '2.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c262ebd39572902bdf4fe3ea570e11cd6725b381',
    ),
    'creocoder/yii2-nested-sets' => 
    array (
      'pretty_version' => '0.9.0',
      'version' => '0.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cb8635a459b6246e5a144f096b992dcc30cf9954',
    ),
    'danielstjules/stringy' => 
    array (
      'replaced' => 
      array (
        0 => '~3.0',
      ),
    ),
    'defuse/php-encryption' => 
    array (
      'pretty_version' => 'v2.3.1',
      'version' => '2.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '77880488b9954b7884c25555c2a0ea9e7053f9d2',
    ),
    'doctrine/collections' => 
    array (
      'pretty_version' => '1.6.8',
      'version' => '1.6.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '1958a744696c6bb3bb0d28db2611dc11610e78af',
    ),
    'doctrine/lexer' => 
    array (
      'pretty_version' => '1.2.3',
      'version' => '1.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c268e882d4dbdd85e36e4ad69e02dc284f89d229',
    ),
    'egulias/email-validator' => 
    array (
      'pretty_version' => '3.2.1',
      'version' => '3.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f88dcf4b14af14a98ad96b14b2b317969eab6715',
    ),
    'elvanto/litemoji' => 
    array (
      'pretty_version' => '3.0.1',
      'version' => '3.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'acd6fd944814683983dcdfcf4d33f24430631b77',
    ),
    'enshrined/svg-sanitize' => 
    array (
      'pretty_version' => '0.15.4',
      'version' => '0.15.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e50b83a2f1f296ca61394fe88fbfe3e896a84cf4',
    ),
    'ezyang/htmlpurifier' => 
    array (
      'pretty_version' => 'v4.14.0',
      'version' => '4.14.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '12ab42bd6e742c70c0a52f7b82477fcd44e64b75',
    ),
    'graham-campbell/result-type' => 
    array (
      'pretty_version' => 'v1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a878d45c1914464426dc94da61c9e1d36ae262a8',
    ),
    'guzzlehttp/guzzle' => 
    array (
      'pretty_version' => '7.4.5',
      'version' => '7.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '1dd98b0564cb3f6bd16ce683cb755f94c10fbd82',
    ),
    'guzzlehttp/promises' => 
    array (
      'pretty_version' => '1.5.1',
      'version' => '1.5.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fe752aedc9fd8fcca3fe7ad05d419d32998a06da',
    ),
    'guzzlehttp/psr7' => 
    array (
      'pretty_version' => '2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '13388f00956b1503577598873fffb5ae994b5737',
    ),
    'illuminate/collections' => 
    array (
      'pretty_version' => 'v9.23.0',
      'version' => '9.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9b862a8e7c0da5b00af75b1422d3a29080ef7adb',
    ),
    'illuminate/conditionable' => 
    array (
      'pretty_version' => 'v9.23.0',
      'version' => '9.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5b40f51ccb07e0e7b1ec5559d8db9e0e2dc51883',
    ),
    'illuminate/contracts' => 
    array (
      'pretty_version' => 'v9.23.0',
      'version' => '9.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ac7f63520e18721f214e80fa7e8f0a5c77ed2719',
    ),
    'illuminate/macroable' => 
    array (
      'pretty_version' => 'v9.23.0',
      'version' => '9.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '25a2c6dac2b7541ecbadef952702e84ae15f5354',
    ),
    'justinrainbow/json-schema' => 
    array (
      'pretty_version' => '5.2.12',
      'version' => '5.2.12.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ad87d5a5ca981228e0e205c2bc7dfb8e24559b60',
    ),
    'league/fractal' => 
    array (
      'pretty_version' => '0.18.0',
      'version' => '0.18.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '4e553dae1a9402adbe11c81430a64675dc97b4fc',
    ),
    'league/oauth2-client' => 
    array (
      'pretty_version' => '2.6.1',
      'version' => '2.6.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '2334c249907190c132364f5dae0287ab8666aa19',
    ),
    'mikehaertl/php-shellcommand' => 
    array (
      'pretty_version' => '1.6.4',
      'version' => '1.6.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '3488d7803df1e8f1a343d3d0ca452d527ad8d5e5',
    ),
    'moneyphp/money' => 
    array (
      'pretty_version' => 'v4.0.4',
      'version' => '4.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'efe904ab6109d87046eb624d5dff7d270fd0cca5',
    ),
    'monolog/monolog' => 
    array (
      'pretty_version' => '2.8.0',
      'version' => '2.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '720488632c590286b88b80e62aa3d3d551ad4a50',
    ),
    'nikic/php-parser' => 
    array (
      'pretty_version' => 'v4.14.0',
      'version' => '4.14.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '34bea19b6e03d8153165d8f30bba4c3be86184c1',
    ),
    'paragonie/random_compat' => 
    array (
      'pretty_version' => 'v9.99.100',
      'version' => '9.99.100.0',
      'aliases' => 
      array (
      ),
      'reference' => '996434e5492cb4c3edcb9168db6fbb1359ef965a',
    ),
    'php-http/async-client-implementation' => 
    array (
      'provided' => 
      array (
        0 => '*',
      ),
    ),
    'php-http/client-implementation' => 
    array (
      'provided' => 
      array (
        0 => '*',
      ),
    ),
    'phpdocumentor/reflection-common' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
    ),
    'phpdocumentor/reflection-docblock' => 
    array (
      'pretty_version' => '5.3.0',
      'version' => '5.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '622548b623e81ca6d78b721c5e029f4ce664f170',
    ),
    'phpdocumentor/type-resolver' => 
    array (
      'pretty_version' => '1.6.1',
      'version' => '1.6.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '77a32518733312af16a44300404e945338981de3',
    ),
    'phpoption/phpoption' => 
    array (
      'pretty_version' => '1.9.0',
      'version' => '1.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dc5ff11e274a90cc1c743f66c9ad700ce50db9ab',
    ),
    'pixelandtonic/imagine' => 
    array (
      'pretty_version' => '1.2.4.2',
      'version' => '1.2.4.2',
      'aliases' => 
      array (
      ),
      'reference' => '5ee4b6a365497818815ba50738c8dcbb555c9fd3',
    ),
    'psr/container' => 
    array (
      'pretty_version' => '2.0.2',
      'version' => '2.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
    ),
    'psr/event-dispatcher' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
    ),
    'psr/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-client' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
    ),
    'psr/http-client-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-factory' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
    ),
    'psr/http-factory-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-message' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f6561bf28d520154e4b0ec72be95418abe6d9363',
    ),
    'psr/http-message-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.1.4',
      'version' => '1.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd49695b909c3b7628b6289db5479a1c204601f11',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0.0 || 2.0.0 || 3.0.0',
        1 => '1.0|2.0',
      ),
    ),
    'psr/simple-cache' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
    ),
    'psy/psysh' => 
    array (
      'pretty_version' => 'v0.10.12',
      'version' => '0.10.12.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a0d9981aa07ecfcbea28e4bfa868031cca121e7d',
    ),
    'ralouphie/getallheaders' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '120b605dfeb996808c31b6477290a714d356e822',
    ),
    'react/promise' => 
    array (
      'pretty_version' => 'v2.9.0',
      'version' => '2.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '234f8fd1023c9158e2314fa9d7d0e6a83db42910',
    ),
    'samdark/yii2-psr-log-target' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ccb29ecb7140c4eb81c3dfad38f61b21a9c1ed30',
    ),
    'seld/cli-prompt' => 
    array (
      'pretty_version' => '1.0.4',
      'version' => '1.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b8dfcf02094b8c03b40322c229493bb2884423c5',
    ),
    'seld/jsonlint' => 
    array (
      'pretty_version' => '1.9.0',
      'version' => '1.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '4211420d25eba80712bff236a98960ef68b866b7',
    ),
    'seld/phar-utils' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9f3452c93ff423469c0d56450431562ca423dcee',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v5.4.11',
      'version' => '5.4.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '535846c7ee6bc4dd027ca0d93220601456734b10',
    ),
    'symfony/deprecation-contracts' => 
    array (
      'pretty_version' => 'v3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '26954b3d62a6c5fd0ea8a2a00c0353a14978d05c',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v6.0.9',
      'version' => '6.0.9.0',
      'aliases' => 
      array (
      ),
      'reference' => '5c85b58422865d42c6eb46f7693339056db098a8',
    ),
    'symfony/event-dispatcher-contracts' => 
    array (
      'pretty_version' => 'v3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '7bc61cc2db649b4637d331240c5346dcc7708051',
    ),
    'symfony/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '2.0|3.0',
      ),
    ),
    'symfony/filesystem' => 
    array (
      'pretty_version' => 'v6.0.11',
      'version' => '6.0.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '33787a6b6e055245d5710697dfc4a9a2b896c032',
    ),
    'symfony/finder' => 
    array (
      'pretty_version' => 'v6.0.11',
      'version' => '6.0.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '09cb683ba5720385ea6966e5e06be2a34f2568b1',
    ),
    'symfony/http-client' => 
    array (
      'pretty_version' => 'v6.0.11',
      'version' => '6.0.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '49bef7df70f84a4f5d516eb268963779ca80320d',
    ),
    'symfony/http-client-contracts' => 
    array (
      'pretty_version' => 'v3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '4184b9b63af1edaf35b6a7974c6f1f9f33294129',
    ),
    'symfony/http-client-implementation' => 
    array (
      'provided' => 
      array (
        0 => '3.0',
      ),
    ),
    'symfony/mailer' => 
    array (
      'pretty_version' => 'v6.0.11',
      'version' => '6.0.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '4a787a257addd412eac53157d459f87f8e335037',
    ),
    'symfony/mime' => 
    array (
      'pretty_version' => 'v6.0.11',
      'version' => '6.0.11.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c6f16f6789587348f6518b193d3499c0e1f5e5c5',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.26.0',
      'version' => '1.26.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6fd1b9a79f6e3cf65f9e679b23af304cd9e010d4',
    ),
    'symfony/polyfill-iconv' => 
    array (
      'pretty_version' => 'v1.26.0',
      'version' => '1.26.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '143f1881e655bebca1312722af8068de235ae5dc',
    ),
    'symfony/polyfill-intl-grapheme' => 
    array (
      'pretty_version' => 'v1.26.0',
      'version' => '1.26.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '433d05519ce6990bf3530fba6957499d327395c2',
    ),
    'symfony/polyfill-intl-idn' => 
    array (
      'pretty_version' => 'v1.26.0',
      'version' => '1.26.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '59a8d271f00dd0e4c2e518104cc7963f655a1aa8',
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'v1.26.0',
      'version' => '1.26.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '219aa369ceff116e673852dce47c3a41794c14bd',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.26.0',
      'version' => '1.26.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9344f9cb97f3b19424af1a21a3b0e75b0a7d8d7e',
    ),
    'symfony/polyfill-php72' => 
    array (
      'pretty_version' => 'v1.26.0',
      'version' => '1.26.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bf44a9fd41feaac72b074de600314a93e2ae78e2',
    ),
    'symfony/polyfill-php73' => 
    array (
      'pretty_version' => 'v1.26.0',
      'version' => '1.26.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e440d35fa0286f77fb45b79a03fedbeda9307e85',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.26.0',
      'version' => '1.26.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cfa0ae98841b9e461207c13ab093d76b0fa7bace',
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v5.4.11',
      'version' => '5.4.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '6e75fe6874cbc7e4773d049616ab450eff537bf1',
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd78d39c1599bd1188b8e26bb341da52c3c6d8a66',
    ),
    'symfony/string' => 
    array (
      'pretty_version' => 'v6.0.11',
      'version' => '6.0.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '042b6bf0f6ccca6d456a0572eb788cfb8b1ff809',
    ),
    'symfony/var-dumper' => 
    array (
      'pretty_version' => 'v5.4.11',
      'version' => '5.4.11.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b8f306d7b8ef34fb3db3305be97ba8e088fb4861',
    ),
    'symfony/yaml' => 
    array (
      'pretty_version' => 'v5.4.11',
      'version' => '5.4.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '05d4ea560f3402c6c116afd99fdc66e60eda227e',
    ),
    'theiconic/name-parser' => 
    array (
      'pretty_version' => 'v1.2.11',
      'version' => '1.2.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '9a54a713bf5b2e7fd990828147d42de16bf8a253',
    ),
    'true/punycode' => 
    array (
      'pretty_version' => 'v2.1.1',
      'version' => '2.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a4d0c11a36dd7f4e7cd7096076cab6d3378a071e',
    ),
    'twig/twig' => 
    array (
      'pretty_version' => 'v3.3.10',
      'version' => '3.3.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '8442df056c51b706793adf80a9fd363406dd3674',
    ),
    'vlucas/phpdotenv' => 
    array (
      'pretty_version' => 'v5.4.1',
      'version' => '5.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '264dce589e7ce37a7ba99cb901eed8249fbec92f',
    ),
    'voku/anti-xss' => 
    array (
      'pretty_version' => '4.1.39',
      'version' => '4.1.39.0',
      'aliases' => 
      array (
      ),
      'reference' => '64a59ba4744e6722866ff3440d93561da9e85cd0',
    ),
    'voku/arrayy' => 
    array (
      'pretty_version' => '7.9.3',
      'version' => '7.9.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '41318bd1483a10f133c8214479b3580a3e936a86',
    ),
    'voku/email-check' => 
    array (
      'pretty_version' => '3.1.0',
      'version' => '3.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6ea842920bbef6758b8c1e619fd1710e7a1a2cac',
    ),
    'voku/portable-ascii' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b56450eed252f6801410d810c8e1727224ae0743',
    ),
    'voku/portable-utf8' => 
    array (
      'pretty_version' => '6.0.4',
      'version' => '6.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f6c78e492520115bb2d947c3a0d90a2c6b7a60a8',
    ),
    'voku/stop-words' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8e63c0af20f800b1600783764e0ce19e53969f71',
    ),
    'voku/stringy' => 
    array (
      'pretty_version' => '6.5.3',
      'version' => '6.5.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c453c88fbff298f042c836ef44306f8703b2d537',
    ),
    'voku/urlify' => 
    array (
      'pretty_version' => '5.0.7',
      'version' => '5.0.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '014b2074407b5db5968f836c27d8731934b330e4',
    ),
    'webmozart/assert' => 
    array (
      'pretty_version' => '1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '11cb2199493b2f8a3b53e7f19068fc6aac760991',
    ),
    'webonyx/graphql-php' => 
    array (
      'pretty_version' => 'v14.11.6',
      'version' => '14.11.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '6070542725b61fc7d0654a8a9855303e5e157434',
    ),
    'yii2tech/ar-softdelete' => 
    array (
      'provided' => 
      array (
        0 => '1.0.4',
      ),
    ),
    'yiisoft/yii2' => 
    array (
      'pretty_version' => '2.0.45',
      'version' => '2.0.45.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e2223d4085e5612aa616635f8fcaf478607f62e8',
    ),
    'yiisoft/yii2-composer' => 
    array (
      'pretty_version' => '2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '94bb3f66e779e2774f8776d6e1bdeab402940510',
    ),
    'yiisoft/yii2-debug' => 
    array (
      'pretty_version' => '2.1.19',
      'version' => '2.1.19.0',
      'aliases' => 
      array (
      ),
      'reference' => '84d20d738b0698298f851fcb6fc25e748d759223',
    ),
    'yiisoft/yii2-queue' => 
    array (
      'pretty_version' => '2.3.4',
      'version' => '2.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ed30b5f46ddadd62587a4963dec35f9b756c408b',
    ),
    'yiisoft/yii2-shell' => 
    array (
      'pretty_version' => '2.0.4',
      'version' => '2.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '6832c3dde303d89f7123bdbcb8cb4d5c80fae4df',
    ),
    'yiisoft/yii2-symfonymailer' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '77baddfd806005604624ec58e6b55b18f31eeaaf',
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







public static function getInstalledPackages()
{
$packages = array();
foreach (self::getInstalled() as $installed) {
$packages[] = array_keys($installed['versions']);
}


if (1 === \count($packages)) {
return $packages[0];
}

return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
}









public static function isInstalled($packageName)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return true;
}
}

return false;
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

$ranges = array();
if (isset($installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = $installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['version'])) {
return null;
}

return $installed['versions'][$packageName]['version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getPrettyVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return $installed['versions'][$packageName]['pretty_version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getReference($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['reference'])) {
return null;
}

return $installed['versions'][$packageName]['reference'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}




private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {
foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
if (isset(self::$installedByVendor[$vendorDir])) {
$installed[] = self::$installedByVendor[$vendorDir];
} elseif (is_file($vendorDir.'/composer/installed.php')) {
$installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
}
}
}

$installed[] = self::$installed;

return $installed;
}
}
