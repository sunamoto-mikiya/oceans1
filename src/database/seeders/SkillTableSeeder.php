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
            'weight' => 5,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_LANGUAGE,
            'name' => 'swift',
            'weight' => 3,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_LANGUAGE,
            'name' => 'JavaScript',
            'weight' => 4,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_LANGUAGE,
            'name' => 'CSS',
            'weight' => 2,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_LANGUAGE,
            'name' => 'C#',
            'weight' => 3,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_LANGUAGE,
            'name' => 'swift',
            'weight' => 3,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_LANGUAGE,
            'name' => 'C++',
            'weight' => 3,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_LANGUAGE,
            'name' => 'TypeScript',
            'weight' => 4,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_LANGUAGE,
            'name' => 'Ruby',
            'weight' => 2,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_LANGUAGE,
            'name' => 'C',
            'weight' => 2,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_LANGUAGE,
            'name' => 'HTML',
            'weight' => 3,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_LANGUAGE,
            'name' => 'SASS',
            'weight' => 2,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_LANGUAGE,
            'name' => 'Go',
            'weight' => 3,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_LANGUAGE,
            'name' => 'Kotlin',
            'weight' => 2,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_LANGUAGE,
            'name' => 'Rust',
            'weight' => 1,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_LANGUAGE,
            'name' => 'Dart',
            'weight' => 1,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_FRAMEWORK,
            'name' => 'Django ',
            'weight' => 4,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_FRAMEWORK,
            'name' => 'Next.js',
            'weight' => 4,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_FRAMEWORK,
            'name' => 'Flask ',
            'weight' => 5,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_FRAMEWORK,
            'name' => 'React',
            'weight' => 5,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_FRAMEWORK,
            'name' => 'Django ',
            'weight' => 4,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_FRAMEWORK,
            'name' => 'laravel',
            'weight' => 3,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_FRAMEWORK,
            'name' => 'Node.js ',
            'weight' => 3,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_FRAMEWORK,
            'name' => 'Next.js',
            'weight' => 4,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_FRAMEWORK,
            'name' => 'Nuxt.js ',
            'weight' => 3,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_FRAMEWORK,
            'name' => 'Vue',
            'weight' => 2,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_FRAMEWORK,
            'name' => 'Angular ',
            'weight' => 2,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_FRAMEWORK,
            'name' => 'Rails',
            'weight' => 2,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_FRAMEWORK,
            'name' => 'Flutter ',
            'weight' => 2,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_DATABASE,
            'name' => 'MySQL',
            'weight' => 5,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_DATABASE,
            'name' => 'PostgreSQL',
            'weight' => 2,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_DATABASE,
            'name' => 'SQLite',
            'weight' => 1,
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
            'type' => SkillType::SKILL_DATABASE,
            'name' => 'Redis',
            'weight' => 2,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_DATABASE,
            'name' => 'FireBase',
            'weight' => 4,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_DATABASE,
            'name' => 'DynamoDB',
            'weight' => 2,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_SERVICE,
            'name' => 'Heroku',
            'weight' => 3,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_SERVICE,
            'name' => 'FireBase',
            'weight' => 4,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_SERVICE,
            'name' => 'Docker',
            'weight' => 3,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_SERVICE,
            'name' => 'Azure',
            'weight' => 4,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_SERVICE,
            'name' => 'AWS',
            'weight' => 4,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_SERVICE,
            'name' => 'Figma',
            'weight' => 3,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Skill::create([
            'type' => SkillType::SKILL_SERVICE,
            'name' => 'GCP',
            'weight' => 2,
            'icon_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
