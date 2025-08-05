<?php

namespace Bakr\Smsmisr\Facades;

use Illuminate\Support\Facades\Facade;

class Smsmisr extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'smsmisr';
    }
}
