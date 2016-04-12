<?php

use ScientiaMobile\WurflCloud\Config;
use ScientiaMobile\WurflCloud\Cache\Null;
use ScientiaMobile\WurflCloud\Cache\Cookie;
use ScientiaMobile\WurflCloud\Client;
  
// Include the autoloader - edit this path! 
require_once 'WURFL-wurfl-cloud-client-php-0476632/src/autoload.php';
// Create a configuration object  
$config = new ScientiaMobile\WurflCloud\Config();
// Set your WURFL Cloud API Key  
$config->api_key = '218222:AS5ztPSQfG0G6DB80WEvzO5CIaNoQCOV';
// Create the WURFL Cloud Client  
$client = new ScientiaMobile\WurflCloud\Client($config);
// Detect your device  
$client->detectDevice();
?>
<div id="deviceInfo">
    <h3>Device info</h3>
    <?php
    foreach ($client->capabilities as $name => $value) {
        echo "<strong>$name</strong>: " . (is_bool($value) ? var_export($value, true) : $value) . "<br/>";
    }
    ?>
</div>