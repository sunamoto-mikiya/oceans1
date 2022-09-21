<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => '田中タロウ',
            'email' => 'tanaka@example.com',
            'birth_date' => 2000 / 05 / 05,
            'password' => 'hoge',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'score' => 1000
        ]);
    }
}
