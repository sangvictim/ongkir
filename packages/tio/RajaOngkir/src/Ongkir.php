<?php

namespace tio\RajaOngkir;

use Illuminate\Support\Facades\Http;

class Ongkir
{
    private static $baseurl_starter = 'https://api.rajaongkir.com/starter';
    private static $baseurl_basic = 'https://api.rajaongkir.com/basic';
    private static $baseurl_pro = 'https://pro.rajaongkir.com/api';

    protected  static function _getBaseUrl()
    {
        $config = config('ongkir.APIKEY_RAJAONGKIR', 'starter');

        switch ($config) {
            case 'starter':
                return self::$baseurl_starter;
                break;

            case 'basic':
                return self::$baseurl_basic;
                break;

            case 'pro':
                return self::$baseurl_pro;
                break;

            default:
                return self::$baseurl_starter;
                break;
        }
    }

    public  static function getProvince()
    {
        $url = Ongkir::_getBaseUrl();
        return  $url;
    }
}
