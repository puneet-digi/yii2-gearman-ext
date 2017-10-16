<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'Gearman.php';

$data = "this is gearman";
$gearman = Gearman::stringConvertorWorker($data);
c($gearman);exit;
