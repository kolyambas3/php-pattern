<?php

namespace App\Model;

use App\Interface\Car;
use App\Interface\Engine;
use App\Interface\Model;

class Audi implements Car
{
    public function info(Engine $engine, Model $model): string
    {
        return "This is Audi {$model->name()} with {$engine->type()} of {$engine->volume()} volume";
    }
}