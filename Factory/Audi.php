<?php

namespace App\Factory;

use App\Interfaces\AbstractFactory\car;
use App\Interfaces\Engine;
use App\Interfaces\Model;
use App\Model\A8;
use App\Model\V6;

class Audi implements car
{
    public function model(): Model
    {
        return new A8();
    }

    public function engine(): Engine
    {
        return new V6();
    }
}