@extends('components.input',[
    'type' => 'number',
    'name' => $name,
    'text' => $text,
    'value' => $value ?? '',
    'icon' => $icon ?? 'fa-solid fa-1'
])
