@extends('components.input',[
    'type' => 'password',
    'name' => $name,
    'text' => $text,
    'value' => $value ?? '',
    'icon'=> $icon ?? 'fa-solid fa-key',
    'disabled' => $disabled ?? null
 ])
