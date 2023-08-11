<?php declare(strict_types = 1);

namespace ApiPlatformTools\Tests\Assets;

use ApiPlatformTools\Attribute\ExtendedApiResource;

#[ExtendedApiResource(
    shortName: 'Extended',
)]
class ExtendedResource extends BaseResource
{
}
