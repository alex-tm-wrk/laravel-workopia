<?php

namespace App\Enums;

enum JobType: string
{
    case FullTime = 'Full-Time';
    case PartTime = 'Part-Time';
    case Contract = 'Contract';
    case Temporary = 'Temporary';
    case Internship = 'Internship';
    case Volunteer = 'Volunteer';
    case OnCall = 'On-Call';
}
