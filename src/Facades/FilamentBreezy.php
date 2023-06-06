<?php

namespace JeffGreco13\FilamentBreezy\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \JeffGreco13\FilamentBreezy\FilamentBreezy
 */
class FilamentBreezy extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \JeffGreco13\FilamentBreezy\FilamentBreezy::class;
    }
}
