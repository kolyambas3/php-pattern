<?php

namespace App\Model;

use App\Interfaces\Model;

class Taycan implements Model
{
    public function name(): string
    {
        return 'Taycan';
    }
}