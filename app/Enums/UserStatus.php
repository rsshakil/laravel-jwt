<?php

namespace App\Enums;

enum UserStatus: int
{
    case ACTIVE = 1;
    case STOP = 2;
    case BAN = 3;

    public function text()
    {
        return match ($this) {
            self::ACTIVE => '有効',
            self::STOP => '一時停止',
            self::BAN => 'BAN',
        };
    }
}
