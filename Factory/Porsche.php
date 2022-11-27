<?php

namespace App\Factory;

use App\Interfaces\AbstractFactory\car;
use App\Interfaces\Engine;
use App\Interfaces\Model;
use App\Model\Taycan;
use App\Model\V8;

class Porsche implements car
{
    public function model(): Model
    {
        return new Taycan();
    }

    public function engine(): Engine
    {
        return new V8();
    }
}