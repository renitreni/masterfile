<?php

namespace App\Enums;

enum EducationalLevelEnum: string
{
    case ELEMENTARY = 'elementary';
    case HIGHSCHOOL = 'highschool';
    case COLLEGE = 'college';
    case UNIVERSITY = 'university';
    case POST_GRADUATE = 'post graduate';
}
