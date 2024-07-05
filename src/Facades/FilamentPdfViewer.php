<?php

namespace Agcodex\FilamentPdfViewer\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Agcodex\FilamentPdfViewer\FilamentPdfViewer
 */
class FilamentPdfViewer extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Agcodex\FilamentPdfViewer\FilamentPdfViewer::class;
    }
}
