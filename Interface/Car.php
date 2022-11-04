<?php

namespace App\Interface;

interface Car {
    public function info(Engine $engine, Model $model):string;
}