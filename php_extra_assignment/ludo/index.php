<?php
  include('LudoBlocks.php');
  include('LudoGame.php');
  // require './vendor/autoload.php';
  // $client = new GuzzleHttp\Client();
  // $data = $client->request('GET','http://learning.architbohra.com/ludo_json.php');
  $file = file_get_contents('data.json');
  $data = json_decode($file);
 
  
  // $body = $data->getBody();

  // $json_data = json_decode($body);
 
  $blue = new LudoBlocks([1,0,0,0]);
  $green = new LudoBlocks([1,2,3,0]);
  (new LudoGame())->totalgamewinner($blue, $green, $data);
  