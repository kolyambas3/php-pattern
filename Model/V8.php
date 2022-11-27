<?php

namespace App\Model;

use App\Interfaces\Engine;

class V8 implements Engine
{
    public function type(): string
    {
        return 'V8';
    }

    public function volume(): string
    {
        return '4.2';
    }
}