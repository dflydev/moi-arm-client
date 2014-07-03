<?php

require __DIR__."/../vendor/autoload.php";

if (! file_exists($configFile = __DIR__.'/config.json')) {
    print "Could not find 'config.json'; did you forget to create it?\n";
    print "(you can start by copying config.json.sample!)\n";
    die();
}

$config = json_decode(file_get_contents($configFile), true);

$soapClient = Moi\Arm\Client\Soap\SoapClientFactory::create(
    $config['wsdlUrl'],
    $config['username'],
    $config['password'],
    $config['serviceUrl']
);

$agencyId = $config['agencyId'];

$client = new Moi\Arm\Client\Soap\SoapArmClient($soapClient, $agencyId);


if (! $client->ping()) {
    print "Cannot connect to ARM service. Ping failed!\n";
    die();
}

print "\n=== States ===\n\n";

foreach ($client->getStatesReferences() as $stateReference) {
    print $stateReference->name() . " (".$stateReference->id().")\n";
}

print "\n=== Income Level References ===\n\n";

foreach ($client->getIncomeLevelsReferences() as $incomeLevelReference) {
    print $incomeLevelReference->name() . " (".$incomeLevelReference->id().")\n";
    print $incomeLevelReference->shortDescription()."\n";
    print $incomeLevelReference->longDescription()."\n";
    print "\n";
}


