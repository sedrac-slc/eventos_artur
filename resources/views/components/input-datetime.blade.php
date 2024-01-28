@extends('components.input',[
    'type' => 'datetime-local',
    'name' => $name,
    'text' => $text,
    'value' => $value ?? '',
    'icon'=> $icon ?? 'fa-solid fa-calendar'
])
