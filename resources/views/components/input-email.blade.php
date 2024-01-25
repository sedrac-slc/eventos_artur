@extends('components.input',[
    'type' => 'email',
    'name' => $name,
    'text' => $text,
    'value' => $value ?? '',
    'icon'=> $icon ?? 'fa-solid fa-envelope'
])
