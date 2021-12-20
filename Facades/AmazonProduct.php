<?php

declare(strict_types=1);

namespace Modules\Amazon\Facades;

use Illuminate\Support\Facades\Facade;
use Modules\Amazon\Contracts\Factory;

class AmazonProduct extends Facade {
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return Factory::class;
    }
}
