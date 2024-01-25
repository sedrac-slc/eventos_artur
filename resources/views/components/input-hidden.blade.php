@extends('components.input',[
    'type' => 'hidden',
    'name' => $name,
    'icon' => '',
    'text' => $text ?? '',
    'value' => $value ?? '',
])
