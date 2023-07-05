<?php

namespace Idnatiya\YoutubeParser\Facades;

use Illuminate\Support\Facades\Facade;

class YoutubeParser extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'idnatiya.youtube.parser';
    }
}
