<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

//$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/json_path');

$factory = (new Factory)->withServiceAccount(__DIR__.'/soulofbraj-80ea9-firebase-adminsdk-9vypk-0991df4b57.json');  
    //->withDatabaseUri('https://soulofbraj-80ea9.firebaseio.com/Donation_Form/')

$database = $factory->createDatabase();
?>