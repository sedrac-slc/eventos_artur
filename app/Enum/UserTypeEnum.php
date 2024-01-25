<?php

namespace App\Enum;

class UserTypeEnum{
    const ADMIN = "ADMIN";
    const CLIENT = "CLIENT";

    static function keys() : array{
        return array_keys(static::keys());
    }

    static function values(): array{
        return [static::CLIENT => "Cliente", static::ADMIN => "Administrador"];
    }

}
