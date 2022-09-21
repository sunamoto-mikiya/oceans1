<?php

namespace Database\Seeders;

use App\Enums\SkillType;
use App\Models\Skill;
use App\Models\User;
use App\Models\UserSkill;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => '前田タロウ',
            'email' => 'maeda@example.com',
            'birth_date' => date('Y-m-d'),
            'password' => Hash::make('password'),
        ]);
        $skill1 = Skill::create([
            'type' => SkillType::SKILL_LANGUAGE,
            'name' => 'Dart',
            'weight' => 3,
            'icon_url' => '',
        ]);
        $skill2 = Skill::create([
            'type' => SkillType::SKILL_FRAMEWORK,
            'name' => 'Flask',
            'weight' => 2,
            'icon_url' => '',
        ]);
        $skill3 = Skill::create([
            'type' => SkillType::SKILL_DATABASE,
            'name' => 'SQLite',
            'weight' => 3,
            'icon_url' => '',
        ]);
        UserSkill::create([
            'user_id' => $user->id,
            'skill_id' => $skill1->id,
            'level' => 5,
        ]);
        UserSkill::create([
            'user_id' => $user->id,
            'skill_id' => $skill2->id,
            'level' => 3,
        ]);
        UserSkill::create([
            'user_id' => $user->id,
            'skill_id' => $skill3->id,
            'level' => 1,
        ]);
    }
}
