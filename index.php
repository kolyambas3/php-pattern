<?php

require ('Model/Audi.php');
require ('Model/V8.php');
require ('Model/A8.php');

use App\Model\A8;
use App\Model\Audi;
use App\Model\V8;

$audi = new Audi();

echo $audi->info(engine: new V8, model: new A8);