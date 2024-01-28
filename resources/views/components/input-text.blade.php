@extends('components.input',[
    'type' => 'text',
    'name' => $name,
    'text' => $text,
    'value' => $value ?? '',
    'icon' => $icon ?? 'fa-solid fa-audio-description'
])
