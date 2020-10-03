<?php

namespace Sheinfeld\DeepL\Laravel\Facades;

use Illuminate\Support\Facades\Facade;
use Sheinfeld\DeepL\Laravel\Wrappers\DeepLApiWrapper;

/**
 * (Facade) Class DeepL.
 *
 * @method static DeepLApiWrapper api()
 */
class DeepL extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'deepl';
    }
}
