<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => '田中タロウ',
            'email' => 'tanaka@example.com',
            'birth_date' => 2000 / 05 / 05,
            'password' => 'hoge',
        ];
    }
}
