<?php

namespace HirenKeraliya\LaravelBulkImport\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \HirenKeraliya\LaravelBulkImport\LaravelBulkImport
 */
class LaravelBulkImport extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \HirenKeraliya\LaravelBulkImport\LaravelBulkImport::class;
    }
}
