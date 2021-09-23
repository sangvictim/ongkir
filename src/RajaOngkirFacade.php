<?php

namespace tio\RajaOngkir;

use Illuminate\Support\Facades\Facade;

class RajaOngkirFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'rajaongkir';
    }
}
