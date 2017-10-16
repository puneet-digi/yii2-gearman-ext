<?php

include 'functions.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Gearman {

  public static $server;
  public static $jobs;
  public static $job;
  public static $client;
  public static $payload;

  public function __construct($server = '127.0.0.1') {
    $this->setServer($server);
  }
  
  public static function stringConvertorWorker($data){
    self::setWorker(new StringConvertor(self::$server));
    self::setPayload($data);
    return self;
  }
 
  public static function setWorker(GearmanWorker $worker) {
    $worker->addFunction(get_class($worker), $worker->execute($job));
    self::$job = $worker;
  }

  public static function setPayload($payload) {
    self::$payload = $payload;
  }
}
