<?php

namespace App\Model;

use App\Interface\Engine;

class V6 implements Engine
{
    public function type(): string
    {
        return 'V6';
    }

    public function volume(): string
    {
        return '2.8';
    }
}