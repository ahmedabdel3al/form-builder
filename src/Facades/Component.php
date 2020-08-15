<?php

namespace Boly\FormBuilder\Facades;

use  Boly\FormBuilder\Component as AppComponent;
use Illuminate\Support\Facades\Facade;

class Component extends Facade
{

    public static function getFacadeAccessor()
    {
        static::clearResolvedInstance(AppComponent::class);
        return AppComponent::class;
    }
}
