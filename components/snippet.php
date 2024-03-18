<?php declare(strict_types=1);

use Kirby\Cms\App;
use Kirby\Template\Snippet;
use Kirby\Toolkit\Controller;

return function (
    App               $kirby,
    string|array|null $name,
    array             $data  = [],
    bool              $slots = false,
): Snippet|string {
    if (\is_string($name)) {
        $root           = $kirby->root('controllers');
        $controller     = Controller::load($root . '/snippets/' . $name . '.php');
        $controllerData = $controller?->call($kirby, $data);

        if (\is_array($controllerData)) {
            $data = \array_merge($data, $controllerData);
        }
    }
    return $kirby->nativeComponent('snippet')($kirby, $name, $data, $slots);
};
