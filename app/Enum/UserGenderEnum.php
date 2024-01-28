<?php

namespace App\Enum;

class UserGenderEnum{
    const MALE = "MALE";
    const FEMALE = "FEMALE";

    static function keys() : array{
        return array_keys(static::values());
    }

    static function values(): array{
        return [static::MALE => "Masculino", static::FEMALE => "Femenino"];
    }

}
