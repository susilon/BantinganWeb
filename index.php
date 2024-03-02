<?php
require 'vendor/autoload.php';

use Bantingan\Bantingan;
use Bantingan\Settings;

error_reporting(E_ALL);

$basepath = __DIR__;
// load settings
Settings::LoadFromPath($basepath, '/config/web.config.yml');
// start application
new Bantingan();
?>