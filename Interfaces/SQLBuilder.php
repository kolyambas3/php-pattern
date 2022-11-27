<?php

namespace App\Interfaces;

interface SQLBuilder
{
    public function select(string $table, array $fields): SQLBuilder;

    public function where(string $field, string $value, string $operator = '='): SQLBuilder;

    public function limit(int $start, int $offset): SQLBuilder;

    public function getSQL(): string;
}
