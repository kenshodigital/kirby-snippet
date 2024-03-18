<?php declare(strict_types=1);

use Kirby\Cms\App;

App::plugin('kensho/snippet', [
    'components' => [
        'snippet' => require __DIR__ . '/components/snippet.php',
    ],
]);
