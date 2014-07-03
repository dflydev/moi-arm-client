<?php

namespace Moi\Arm\Client\Soap;

use SoapClient;

class SoapClientFactory
{
    public static function create($wsdl, $username, $password, $location = null)
    {
        $soapClient = new SoapClient($wsdl, array(
            'login' => $username,
            'password' => $password,
        ));

        if (null !== $location) {
            $soapClient->__setLocation($location);
        }

        return $soapClient;
    }
}
