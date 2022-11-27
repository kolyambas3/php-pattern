<?php

namespace App\Model;

use App\Interfaces\Car;
use App\Interfaces\Engine;
use App\Interfaces\Model;

class Audi implements Car
{
    public function info(Engine $engine, Model $model): string
    {
        return "This is Audi {$model->name()} with {$engine->type()} of {$engine->volume()} volume";
    }
}