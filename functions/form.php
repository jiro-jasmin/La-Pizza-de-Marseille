<?php

function checkbox(string $name, string $value, array $data, bool $required = false): string
{
    $attribute = '';
    if (isset($data[$name]) && in_array($value, $data[$name])) {
        $attribute .= 'checked';
    }

    $required = $required ? 'required' : '';

    return <<<HTML
    <input type="checkbox" name="{$name}[]" value="{$value}" $required {$attribute}>
HTML;
}

function radio(string $name, string $value, array $data, bool $required = false): string
{
    $attribute = '';
    if (isset($data[$name]) && $value === $data[$name]) {
        $attribute .= 'checked';
    }

    $required = $required ? 'required' : '';


    return <<<HTML
    <input type="radio" name="{$name}" value="{$value}" $required {$attribute}>
HTML;
}
