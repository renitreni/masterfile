<?php

namespace App\Enums;

enum CivilStatusEnum: string
{
    case MARRIED = 'married';
    case DIVORCED = 'divorced';
    case SEPARATED = 'separated';
    case WIDOWED = 'widowed';
}
