<?php

namespace App\Interfaces;

interface Car {
    public function info(Engine $engine, Model $model):string;
}