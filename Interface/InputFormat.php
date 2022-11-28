<?php

namespace App\Interfaces;

interface InputFormat
{
    public function formatText(string $text): string;
}