<?php

namespace Database\Seeders;

use App\Enums\SkillType;
use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class SkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::create([
            'type' => SkillType::SKILL_LANGUAGE,
            'name' => 'php',
            'weight' => 3,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_LANGUAGE,
            'name' => 'java',
            'weight' => 2,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_LANGUAGE,
            'name' => 'python',
            'weight' => 3,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_LANGUAGE,
            'name' => 'swift',
            'weight' => 2,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_FRAMEWORK,
            'name' => 'Django',
            'weight' => 2,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_FRAMEWORK,
            'name' => 'Laravel',
            'weight' => 2,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_DATABASE,
            'name' => 'MySQL',
            'weight' => 2,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_DATABASE,
            'name' => 'MongoDB',
            'weight' => 2,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_SERVICE,
            'name' => 'AWS',
            'weight' => 2,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_SERVICE,
            'name' => 'Azure',
            'weight' => 2,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
