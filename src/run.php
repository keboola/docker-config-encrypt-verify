<?php

use Symfony\Component\Yaml\Yaml;

require_once(dirname(__FILE__) . "/../vendor/autoload.php");

$arguments = getopt("d::", array("data::"));
if (!isset($arguments["data"])) {
    print "Data folder not set.";
    exit(1);
}

$config = Yaml::parse(file_get_contents($arguments["data"] . "/config.yml"));

try {
    if ($config["parameters"]["plain"] == $config["parameters"]["encrypted"]) {
        exit(0);
    } else {
        print "Values do not match: {$config["parameters"]["plain"]} {$config["parameters"]["encrypted"]} ";
        exit(1);
    }
} catch (\Exception $e) {
    print $e->getMessage();
    exit(2);
}
