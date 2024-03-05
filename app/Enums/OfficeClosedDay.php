<?php

namespace App\Enums;

enum OfficeClosedDay: string
{
    
    case Saturday = 'Saturday';
    case Sunday = 'Sunday';
    case Saturday_Sunday = 'Saturday,Sunday';
}
