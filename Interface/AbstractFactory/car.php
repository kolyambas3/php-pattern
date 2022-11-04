<?php

namespace App\AbstractFactory\Interface;

use App\Interface\Engine;
use App\Interface\Model;

interface Car {
    public function model(): Model;

    public function engine(): Engine;
}