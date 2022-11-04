<?php

namespace App\Model;

use App\Interface\Model;

class Taycan implements Model
{
    public function name(): string
    {
        return 'Taycan';
    }
}