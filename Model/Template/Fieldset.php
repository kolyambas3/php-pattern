<?php

namespace App\Model\Template;

class Fieldset
{
    public function render(): string
    {
        $output = parent::render();

        return "<fieldset><legend>{$this->title}</legend>\n$output</fieldset>\n";
    }
}