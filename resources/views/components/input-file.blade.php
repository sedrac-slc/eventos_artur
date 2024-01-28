@extends('components.input',[
    'type' => 'file',
    'name' => $name,
    'text' => $text,
    'value' => $value ?? '',
    'icon' => $icon ?? 'fa-solid fa-file',
    'disabled' => $disabled ?? null
])
