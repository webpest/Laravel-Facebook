<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Facebook.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Facebook\Facades;

use Illuminate\Support\Facades\Facade;

class Facebook extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'facebook.auth.manager';
    }
}
