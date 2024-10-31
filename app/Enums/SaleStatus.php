<?php

namespace App\Enums;

enum SaleStatus: string
{
    case PENDING = "P";
    case APPROVED = "A";
    case CANCELED = "C";
}