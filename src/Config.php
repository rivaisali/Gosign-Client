<?php

namespace GosignClient;

/**
 * GoSign Configuration
 */
class Config
{

    /**
     * Your app's secret key
     * 
     * @static
     */
    public static $secretKey;
    /**
     * Your apps client key
     * 
     * @static
     */
    public static $clientKey;
   

   
    /**
     * Default options for every request
     * 
     * @static
     */
    public static $curlOptions = array();

    const DEVELOPMENT_BASE_URL = 'http://localhost:8000';
    const PRODUCTION_BASE_URL = 'https://gosign.gorontalokota.go.id';


    /**
     * Get baseUrl
     * 
     * @return string Gosign API URL, depends on $isProduction
     */
    public static function getBaseUrl()
    {
        return Config::$isProduction ?
        Config::PRODUCTION_BASE_URL : Config::DEVELOPMENT_BASE_URL;
    }

    
}
