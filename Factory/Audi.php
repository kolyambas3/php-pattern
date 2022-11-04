<?php

namespace App\Factory;

use App\AbstractFactory\Interface\Car;
use App\Interface\Engine;
use App\Interface\Model;
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