<?php

namespace App\Model;

use App\Interfaces\Car;
use App\Interfaces\Engine;
use App\Interfaces\Model;

class Porsche implements Car
{
    public function info(Engine $engine, Model $model): string
    {
        return "This is Porsche {$model->name()} with {$engine->type()} of {$engine->volume()} volume";
    }
}