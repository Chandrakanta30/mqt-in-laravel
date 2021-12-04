<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \PhpMqtt\Client\MqttClient;
use \PhpMqtt\Client\ConnectionSettings;
class MqtController extends Controller
{
    //

    public function sub(){
        $server   = 'm386effe.eu-central-1.emqx.cloud';
$port     = 1883;
$clientId = rand(5, 15);
$username = 'test2';
$password = "test2";
$clean_session = false;

$connectionSettings  = new ConnectionSettings();
$connectionSettings
  ->setUsername($username)
  ->setPassword($password)
  ->setKeepAliveInterval(60)
  ->setLastWillQualityOfService(1);


$mqtt = new MqttClient($server, $port, $clientId);

$mqtt->connect($connectionSettings, $clean_session);
printf("client connected\n");

    }
    public function pub(){
        return "sub";
    }
}
