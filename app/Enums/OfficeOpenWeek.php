<?php

namespace App\Enums;

enum OfficeOpenWeek: string
{
    case Sunday_Friday = 'Sunday-Friday';
    case Sunday_Saturday = 'Sunday-Saturday';
    case Monday_Friday = 'Monday-Friday';
    case Monday_Saturday = 'Monday-Saturday';
    case Monday_Sunday = 'Monday-Sunday';
    case Saturday_Sunday = 'Saturday-Sunday';
}
