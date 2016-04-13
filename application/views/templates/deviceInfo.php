<?php


use ScientiaMobile\WurflCloud\Config;
use ScientiaMobile\WurflCloud\Cache\Null;
use ScientiaMobile\WurflCloud\Cache\Cookie;
use ScientiaMobile\WurflCloud\Client;
?>

<div id="deviceInfo">
    <h3>Device info</h3>

<?php
try {
    // Include the autoloader - edit this path! 
    require_once 'WURFL-wurfl-cloud-client-php-0476632/src/autoload.php';
    
    // Create a WURFL Cloud Config
    $config = new Config();

    // Set your API Key here
    $config->api_key = '218222:AS5ztPSQfG0G6DB80WEvzO5CIaNoQCOV';

    // Create a WURFL Cloud Client
    $client = new Client($config, new Null());

    // Detect the visitor's device
    $client->detectDevice();

    // Show all the capabilities returned by the WURFL Cloud Service
    foreach ($client->capabilities as $name => $value) {
        echo "<strong>$name</strong>: " . (is_bool($value) ? var_export($value, true) : $value) . "<br/>";
    }
} catch (Exception $e) {
    // Show any errors
    echo "Error: " . $e->getMessage();
}
?>
</div>