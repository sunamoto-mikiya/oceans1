<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class SkillType extends Enum
{
    const SKILL_LANGUAGE = 1;
    const SKILL_FRAMEWORK = 2;
    const SKILL_DATABASE = 3;
    const SKILL_SERVICE = 4;
}
