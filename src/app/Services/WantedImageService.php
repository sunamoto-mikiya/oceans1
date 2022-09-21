<?php

namespace App\Services;

use App\Models\Skill;
use App\Models\UserSkill;
use Exception;

class WantedImageService
{

    public function calculateSkill(array $skills, int $userId, int $magnification): int
    {
        $amount = 0;
        foreach ($skills as $skill) {
            try {
                $targetSkill = Skill::where('name', $skill['name'])->firstOrFail();
            } catch (Exception $e) {
                continue;
            }

            $userSkill = UserSkill::where('user_id', $userId)->where('skill_id', $targetSkill->id)->first();
            if (!is_null($userSkill)) {
                continue;
            }

            UserSkill::create([
                'user_id' => $userId,
                'skill_id' => $targetSkill->id,
                'level' => $skill['level'],
            ]);

            // 10,000,000ベリー単位で決める
            $amount += $targetSkill->weight * $skill['level'] * $magnification;
        }
        return $amount;
    }
    public function languageCalculate(array $skills, int $userId): int
    {
        $magnification = 1000000;
        $amount = $this->calculateSkill($skills, $userId, $magnification);

        return $amount;
    }

    public function frameWorkCalculate(array $skills, int $userId)
    {
        $magnification = 1500000;
        $amount = $this->calculateSkill($skills, $userId, $magnification);

        return $amount;
    }

    public function databaseCalculate(array $skills, int $userId)
    {
        $magnification = 750000;
        $amount = $this->calculateSkill($skills, $userId, $magnification);

        return $amount;
    }

    public function serviceCalculate(array $skills, int $userId)
    {
        $magnification = 750000;
        $amount = $this->calculateSkill($skills, $userId, $magnification);

        return $amount;
    }
}
