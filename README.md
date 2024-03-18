# Snippet for Kirby

Adds controllers to [Kirby][1] snippets.

## General

Brings Kirby’s mechanism for [template controllers][2] to [snippets][3] and [blocks][4]. This provides a unified and consistent way to offload logic and prepare data for cleaner templates and snippets.

### How it works

The plugin uses Kirby’s [native features][5] and [extension points][6]. It looks for a controller whenever a snippet is called, and passes the resulting controller data to the snippet.

Since blocks are also just rendered as snippets under the hood, this works for blocks as well. 

## Installation

```shell
composer require kenshodigital/kirby-snippet ^1.0
```

## Usage

Snippet controllers are loaded from a `snippets` folder under the [configured root for controllers][7]. 

Just as [template controllers and templates][8], snippet controllers are identified by the same filename as their corresponding snippets.

| Snippet                           | Snippet Controller                            |
|-----------------------------------|-----------------------------------------------|
| `/site/snippets/article.php`      | `/site/controllers/snippets/article.php`      |
| `/site/snippets/blocks/video.php` | `/site/controllers/snippets/blocks/video.php` |

As usual, snippet controllers are [anonymous functions][9] that receive the [snippet data][10] as arguments and return variables as an associative array. The resulting controller data is then merged with the original snippet data, before everything is passed to the snippet.

 [1]: https://getkirby.com
 [2]: https://getkirby.com/docs/guide/templates/controllers
 [3]: https://getkirby.com/docs/guide/templates/snippets
 [4]: https://getkirby.com/docs/guide/page-builder/block-basics#custom-block-types__custom-block-type-snippet
 [5]: https://getkirby.com/docs/reference/objects/toolkit/controller
 [6]: https://getkirby.com/docs/reference/plugins/components/snippet
 [7]: https://getkirby.com/docs/reference/system/roots/controllers
 [8]: https://getkirby.com/docs/guide/templates/controllers#the-controllers-directory
 [9]: https://getkirby.com/docs/guide/templates/controllers#creating-a-controller
[10]: https://getkirby.com/docs/guide/templates/snippets#passing-variables-to-snippets
