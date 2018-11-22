<?php

namespace Linx\RemoteConfigClient;

use Illuminate\Support\Facades\Facade;

class RemoteConfigFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return RemoteConfig::class;
    }
}
