# extended-resource

[![Stand With Ukraine](https://raw.githubusercontent.com/vshymanskyy/StandWithUkraine/main/banner2-direct.svg)](https://vshymanskyy.github.io/StandWithUkraine)

Installation
------------

The recommended way to install is via Composer:

```shell
composer require api-platform-tools/extended-resource
```

This package requires at least PHP 8.1.0.

Other packages may come with api resources that with some configuration may not be suited for
straight away usage in a project. This is why `ExtendedApiResource` is useful to override part of options defined
in default attributes.

For example, take a look at `ApiPlatformTools\Tests\Assets\BaseResource` class. It defines api resource.
If you want iri to be `/api/vendor/bases`, you have to do the following:
1. Create new class that extends resource you want to override
2. Add `ExtendedApiResouce` attribute insted of `ApiResource` attribute
3. Pass only those options that you want to override, others will be taken from resource you are extending
```php
namespace ApiPlatformTools\Tests\Assets;

use ApiPlatformTools\Attribute\ExtendedApiResource;

#[ExtendedApiResource(routePrefix: '/vendor')]
class VendorResource extends ApiPlatformTools\Tests\Assets\BaseResource
{
}
```
`ExtendedApiResouce` attribute checks which resource you are extending and overrides options given in extension,
keeping other options same as in parent resource.

> **IMPORTANT**: You need to disable extended resource using api_platform.openapi.factory decorator, otherwise you will have 2 instances of base
> resource: one with `/api/bases` iri and one with `/api/vendor/bases` iri.
