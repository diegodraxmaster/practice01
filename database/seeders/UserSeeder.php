<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        \App\Models\User::factory(10000)->create()->each(function ($user){
            \App\Models\Newsletter::factory(1)->create(['id' => $user->id]);
        });
    }
}
