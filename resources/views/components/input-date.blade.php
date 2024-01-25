@extends('components.input',[
    'type' => 'date',
    'name' => $name,
    'text' => $text,
    'value' => $value ?? '',
    'icon'=> $icon ?? 'fa-solid fa-calendar'
])
