<?php

namespace App\Interface;

interface Engine {
    public function type(): string;

    public function volume(): string;
}