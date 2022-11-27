<?php

namespace App\Interfaces\AbstractFactory;

use App\Interfaces\Engine;
use App\Interfaces\Model;

interface Car {
    public function model(): Model;

    public function engine(): Engine;
}