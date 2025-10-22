<?php

namespace App\Enums;

enum Role: int
{
    case SV = 1;
    case CU = 2;

    public function text()
    {
        return match ($this) {
            self::SV => '全権限',
            self::CU => 'customer',
        };
    }
}
