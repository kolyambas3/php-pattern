<?php

namespace App\Factory;

use App\AbstractFactory\Interface\Car;
use App\Interface\Engine;
use App\Interface\Model;
use App\Model\Taycan;
use App\Model\V8;

class Porsche implements Car
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