<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = [
            [
                'type' => 1,
                'name' => 'php',
                'weight' => 3,
                'icon_url' => ''
            ],
            [
                'type' => 1,
                'name' => 'java',
                'weight' => 2,
                'icon_url' => ''
            ],
            [
                'type' => 1,
                'name' => 'python',
                'weight' => 3,
                'icon_url' => ''
            ],
            [
                'type' => 1,
                'name' => 'swift',
                'weight' => 2,
                'icon_url' => ''
            ],
            [
                'type' => 2,
                'name' => 'c',
                'weight' => 2,
                'icon_url' => ''
            ]
        ];
    }
}
