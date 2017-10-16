<?php

class StringConvertor extends GearmanWorker {

  public function __construct($server) {
    $this->addServer($server);
  }

  public function execute($job) {
    c($job);exit;
    if (is_callable($job->workload())) {
      return strrev($job->workload());
    }
  }

}
