<?php

namespace Busayo\Yearly;

use Illuminate\Support\Facades\Facade;

class YearlyFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-yearly';
    }
}