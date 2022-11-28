<?php

namespace App\Model;

use App\Interfaces\InputFormat;

class TextInput implements InputFormat
{
    public function formatText(string $text): string
    {
        return $text;
    }
}