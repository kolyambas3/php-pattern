<?php

namespace App\Model;

use App\Interface\Car;
use App\Interface\Engine;
use App\Interface\Model;

class Porsche implements Car
{
    public function info(Engine $engine, Model $model): string
    {
        return "This is Porsche {$model->name()} with {$engine->type()} of {$engine->volume()} volume";
    }
}