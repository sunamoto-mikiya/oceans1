<?php

namespace App\Http\Controllers;

use App\Enums\SkillType;
use App\Models\Skill;
use App\Models\UserSkill;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function getLanguages()
    {
        $skills = Skill::where('type', SkillType::SKILL_LANGUAGE)->get();
        return response()->json($skills->all());
    }
    
    public function getFrameworks()
    {
        $skills = Skill::where('type', SkillType::SKILL_FRAMEWORK)->get();
        return response()->json($skills->all());
    }
    
    public function getDatabases()
    {
        $skills = Skill::where('type', SkillType::SKILL_DATABASE)->get();
        return response()->json($skills->all());
    }
    
    public function getServices()
    {
        $skills = Skill::where('type', SkillType::SKILL_SERVICE)->get();
        return response()->json($skills->all());
    }

    public function getUserLanguages(int $userId)
    {
        $userLanguages = UserSkill::where('user_id', $userId)
            ->whereHas('skill', function (Builder $q) {
                $q->where('type', SkillType::SKILL_LANGUAGE);
            })->get();
        $response = [];
        foreach ($userLanguages as $userLanguage) {
            array_push($response, [
                'name' => $userLanguage->skill->name,
                'level' => $userLanguage->level,
            ]);
        };

        while (count($response) < 3) {
            array_push($response, [
                'name' => '',
                'level' => 1,
            ]);
        };

        return response()->json($response);
    }

    public function getUserFrameworks(int $userId)
    {
        $userSkills = UserSkill::where('user_id', $userId)
            ->whereHas('skill', function (Builder $q) {
                $q->where('type', SkillType::SKILL_FRAMEWORK);
            })->get();
        $response = [];
        foreach ($userSkills as $userSkill) {
            array_push($response, [
                'name' => $userSkill->skill->name,
                'level' => $userSkill->level,
            ]);
        };

        while (count($response) < 3) {
            array_push($response, [
                'name' => '',
                'level' => 1,
            ]);
        };

        return response()->json($response);
    }

    public function getUserDatabases(int $userId)
    {
        $userSkills = UserSkill::where('user_id', $userId)
            ->whereHas('skill', function (Builder $q) {
                $q->where('type', SkillType::SKILL_DATABASE);
            })->get();
        $response = [];
        foreach ($userSkills as $userSkill) {
            array_push($response, [
                'name' => $userSkill->skill->name,
                'level' => $userSkill->level,
            ]);
        };

        while (count($response) < 3) {
            array_push($response, [
                'name' => '',
                'level' => 1,
            ]);
        };

        return response()->json($response);
    }

    public function getUserServices(int $userId)
    {
        $userSkills = UserSkill::where('user_id', $userId)
            ->whereHas('skill', function (Builder $q) {
                $q->where('type', SkillType::SKILL_SERVICE);
            })->get();
        $response = [];
        foreach ($userSkills as $userSkill) {
            array_push($response, [
                'name' => $userSkill->skill->name,
                'level' => $userSkill->level,
            ]);
        };

        while (count($response) < 3) {
            array_push($response, [
                'name' => '',
                'level' => 1,
            ]);
        };

        return response()->json($response);
    }
}
